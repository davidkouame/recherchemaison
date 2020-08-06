<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use bootnetcrasher\House\Models\PublicationModel;
class publicationController extends Controller
{
	protected $PublicationModel;

    protected $helpers;

    public function __construct(PublicationModel $PublicationModel, Helpers $helpers)
    {
        parent::__construct();
        $this->PublicationModel    = $PublicationModel;
        $this->helpers          = $helpers;
    }

    public function index(){
        $data = $this->PublicationModel->all()->toArray();
        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    public function find(Request $request){
        $data = $this->PublicationModel;
        foreach($request->all() as $key => $value){
            $data = $data->where($key, $value);
        }
        $data = $data->get();
        // $data = $data ? $data->toArray() : null;
        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    public function show($id){
        $data = $this->PublicationModel->where('id',$id)->first();
        if( $data){
            return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
        }
        $this->helpers->apiArrayResponseBuilder(400, 'bad request', ['error' => 'invalid key']);
    }

    public function store(Request $request){

        try{
            $arr = $request->all();

            while ( $data = current($arr)) {
                if(key($arr) != "images"){
                    $this->PublicationModel->{key($arr)} = $data;
                }
                next($arr);
            }

            // dd($this->PublicationModel);

            $validation = Validator::make($request->all(), $this->PublicationModel->rules);
            
            if( $validation->passes() ){
                $this->PublicationModel->scrapping = now();
                $this->PublicationModel->statut_publication = 1;

                // attach that $file to Model
                // $this->PublicationModel->cover = $file;
                $images = post('images');
                if($images){
                    foreach($images as $key=>$image){
                        $img = $image;
                        $img = str_replace('data:image/png;base64,', '', $img);
                        $img = str_replace(' ', '+', $img);
                        $imageData = null;
                        if($img){
                            $imageData = base64_decode($img);
                        }
                        // $imageData = $img;
                        // we got raw data of file now we can convert this row data to file in dist and add that to `File` model
                        $file = (new \System\Models\File)->fromData($imageData, 'your_preferred_name'.$key.'.jpeg');
                        $this->PublicationModel->photos = $file;
                        if($key == 0){
                            $filecover = (new \System\Models\File)->fromData($imageData, 'cover_name.jpeg');
                            $this->PublicationModel->cover = $filecover;
                        }
                    }
                }

                $this->PublicationModel->save();
                return $this->helpers->apiArrayResponseBuilder(201, 'created', ['id' => $this->PublicationModel->id]);
            }else{
                return $this->helpers->apiArrayResponseBuilder(400, 'fail', $validation->errors() );
            }
        }catch(Exception $e){
            trace_log($e->getMessage());
            return $this->helpers->apiArrayResponseBuilder(400, $e->getMessage() );
        }

    }

    public function update($id, Request $request){

        $status = $this->PublicationModel->where('id',$id)->update($data);
    
        if( $status ){
            
            return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been updated successfully.');

        }else{

            return $this->helpers->apiArrayResponseBuilder(400, 'bad request', 'Error, data failed to update.');

        }
    }

    public function delete($id){

        $this->PublicationModel->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }

    public function destroy($id){

        $this->PublicationModel->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }


    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
    
}