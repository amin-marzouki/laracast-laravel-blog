 <?php
 class Post{
public static function all()
{
$files = File::files(resource_path('posts/'));
return array_map(fn($files)=>$files->getCountents(),$files);
}

public static function find($slug){
if(!file_exists($path= resource_path("posts/{$slug}"))){
    return redirect('/');
    

}
return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

}
}