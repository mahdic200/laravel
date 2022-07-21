<?php



use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class, 20)->create();
        $user = factory(Post::class, 20)->create();
        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('users')->insert([
        //         'name' => Str::random(6),
        //         'email' => Str::random(6) . "@gmail.com",
        //         'password' => Str::random(20),
        //     ]);
        // }
    }
}
