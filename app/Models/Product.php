<?php

namespace App\Models;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actions;
use Intervention\Image\ImageManager; //from composer package: intervention/image
use Storage;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    public static function add_product(Request $req)
    {
        $product = new product();
        $product->name = $req->name;
        $product->description = $req->description;
        $product->image = $req->image;
        $newImageName = rand().md5(time());
        Storage::copy($req->image, 'public/showcase-images/'.$newImageName);

        $imageUploaded = true;
        if($product->image == null) {$product->image = "default_image.png";$imageUploaded = false;}
        $product->categories = $req->categories;
        $product['is-hidden'] = (int)$req->hidden;
        $product->save();

        if($imageUploaded){
            $manager = new ImageManager();
            // $image = 'public/showcase-images/'.$newImageName;
            // str_replace('public','storage',$image);
            $image = $req->file('image')->store('public/showcase-images');
            $image = __DIR__.'/../../storage/app/'.$image;
            // return $image;
            $image = $manager->make($image);

            $imageHeight = $image->height();
            $imageWidth = $image->width();
            $landscape = $portrat = false;

            $imageHeight > $imageWidth ? $portrat = true : $landscape = true;
            if($portrat){
                $image->crop($imageWidth,$imageWidth,0,0);
            }
            else {
                $image->crop($imageHeight,$imageHeight,0,0);
            }

            $image = $image->encode('jpeg');
            $image->save(str_replace('public','storage',$product->image).'.square.jpeg');
            $image = $image->encode('webp');
            $image->save(str_replace('public','storage',$product->image).'.square.webp');
        }
        $action = new Action();
        $action->type = "Create";
        $action->parameters = $product->id. '+' .$product->name;
        $action->message = "";
        $action->save();

        return true;
    }

    public static function edit_product(Request $req)
    {
        $product = Product::findOrFail($req->id);
        $previousName = $product->name;
        if($req->name){$product->name = $req->name;}
        if($req->description){$product->description = $req->description;}
        if($req->image){$product->image = $req->image;}if($product->image == null) {$product->image = "default_image.png";}
        if($req->categories){$product->categories = $req->categories;}
        if($req->hidden){$product['is-hidden'] = (int)$req->hidden;}
        $product->save();
        if($req->image){
            $manager = new ImageManager();
            $image = str_replace('public','storage',$product->image);
            $image = $manager->make($image);

            $imageHeight = $image->height();
            $imageWidth = $image->width();
            $landscape = $portrat = false;

            $imageHeight > $imageWidth ? $portrat = true : $landscape = true;
            if($portrat){
                $image->crop($imageWidth,$imageWidth,0,0);
            }
            else {
                $image->crop($imageHeight,$imageHeight,0,0);
            }

            $image = $image->encode('jpeg');
            $image->save(str_replace('public','storage',$product->image).'.square.jpeg');
            $image = $image->encode('webp');
            $image->save(str_replace('public','storage',$product->image).'.square.webp');
        }
        $action = new Action();
        $action->type = "Edit";
        $action->parameters = $product->id. '+' .$product->name."+".$previousName;
        $action->message = "";
        $action->save();

        return true;
    }

    public static function toggle_product(Request $req)
    {
        $product = product::findOrFail($req->data);
        $product['is-hidden'] = !$product['is-hidden'];
        $product->save();
        $action = new Action();
        $action->type = "Toggle";
        $action->parameters = $product->id. '+'.$product->name.'+'.$product['is-hidden'];
        $action->message = "";
        $action->save();
        if($product['is-hidden']){return 0;}
        else {return 1;}
    }
}
