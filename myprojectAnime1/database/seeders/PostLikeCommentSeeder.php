
<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Country;
use App\Models\Like;
use App\Models\Comment;

class PostLikeCommentSeeder extends Seeder
{
    public function run()
    {

        $country = Country::first(); 
        $user = User::first(); 

        $post1 = Post::create([
            'country_id' => $country->id,
            'user_id' => $user->id,
            'content' => 'Dit is de eerste voorbeeldpost.',
        ]);

        $post2 = Post::create([
            'country_id' => $country->id,
            'user_id' => $user->id,
            'content' => 'Dit is de tweede voorbeeldpost.',
        ]);
    }
}



