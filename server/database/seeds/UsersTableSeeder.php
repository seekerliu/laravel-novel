<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * 创建管理员用户
         * 想通过这里套我的账号密码？
         * 没门！我放 .env 里面了 ^_^
         */
        $administrator = new \App\User();
        $administrator->name = env('INIT_ADMIN_NAME');
        $administrator->email = env('INIT_ADMIN_EMAIL');
        $administrator->password = bcrypt(env('INIT_ADMIN_PASSWORD'));
        $administrator->save();
    }
}
