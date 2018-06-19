<?php

use Illuminate\Database\Seeder;

#---------------------------------------------------------
#============= 04 ==========  [ Creando Profile ]  =======
#---------------------------------------------------------

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # ========= Crear Seeder ===============
        # php artisan make:seeder UsersTableSeeder

        $user = App\User::create([

            'name' => 'Artemis Fowl',
            'email' => 'a@ya.com',
            'password' => bcrypt('123456'),
            'admin' => 1

        ]);

        #======================================
        #------ Creando Perfil para el Admin

        App\Profile::create([

            // llamando el id del usuario que  se acabo de crear en el profile
            'user_id' => $user->id,
            'avatar'=> 'uploads/avatars/avatar_admin.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid consectetur consequuntur, ea eaque eius eos exercitationem inventore laboriosam laudantium magnam modi numquam quam quos rem rerum sequi veritatis voluptatem.',
            'facebook'=> 'facebook.com',
            'youtube' => 'youtube.com'

        ]);

        #---------------------------------------------------------
        #============= 05 ==========  [ migrar:refresh y seed ]  =
        #---------------------------------------------------------




    }
}
