<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Str;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()['cache']->forget('spatie.permission.cache');

        // ASIGN ROLES
        $adminRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'administrator',
            'display_name' => 'Administrator',
        ]);

        $guestRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'guest',
            'display_name' => 'Guest',
        ]);

        $editorRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'editor',
            'display_name' => 'Editor',
        ]);

        $authorRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'author',
            'display_name' => 'Author',
        ]);

        $supervisorRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'supervisor',
            'display_name' => 'Supervisor',
        ]);

        /*
        |
        | CREATING USERS
        |
        */

        // ADMIN

        $adminJF = User::create([
            'name' => 'Janzen Faidiban',
            'slug' => 'janzen-faidiban',
            'job_title' => 'Information Technology Coordinator',
            'picture' => 'Janzen-3-200x200.jpg',
            'email' => 'janzen.faidiban@sagufoundation.org',
            'password' => bcrypt('janzen.faidiban@sagufoundation.org'),
            'status' => 'Publish',
        ]);
        $adminJF->assignRole($adminRole);

        $adminFW = User::create([
            'name' => 'Febe Worabay',
            'slug' => 'febe-worabay',
            'job_title' => 'Administration Officer',
            'picture' => 'Febe-200x200.jpg',
            'email' => 'febe-woaraby@sagufoundation.org',
            'password' => bcrypt('febe-woaraby@sagufoundation.org'),
            'status' => 'Publish',
        ]);
        $adminFW->assignRole($adminRole);

        $adminTR = User::create([
            'name' => 'Tisha Rumbewas',
            'slug' => 'tisha-rumbewas',
            'job_title' => 'Director',
            'picture' => 'Tisha-200x200.jpg',
            'email' => 'tisha-rumbewas@sagufoundation.org',
            'password' => bcrypt('tisha-rumbewas@sagufoundation.org'),
            'status' => 'Publish',
        ]);
        $adminTR->assignRole($adminRole);

        $adminEJ = User::create([
            'name' => 'Elisabeth Jakarimilena',
            'slug' => 'elisabeth-jakarimilena',
            'job_title' => 'Finance Officer',
            'picture' => 'Ellysabeth-200x200.jpg',
            'email' => 'elisabeth.jakarimilena@sagufoundation.org',
            'password' => bcrypt('elisabeth.jakarimilena@sagufoundation.org'),
            'status' => 'Publish',
        ]);
        $adminEJ->assignRole($adminRole);

        // GUEST
        $guestBPSDM = User::create([
            'name' => 'BPSDM',
            'slug' => 'bpsdm',
            'job_title' => 'Pemerintah Provinsi Papua',
            'picture' => 'bpsdm-papua.jpg',
            'email' => 'admin.bpsdm@papua.go.id',
            'password' => bcrypt('admin.bpsdm@papua.go.id'),
            'status' => 'Publish',
        ]);
        $guestBPSDM->assignRole($guestRole);








        // // EDITOR
        // $editorDLHK = User::create([
        //     'name'              => 'Editor',
        //     'slug'              => 'editor'.time().Str::random(12),
        //     'picture'           => '04.jpg',
        //     'email'             => 'editor@sagufoundation.org',
        //     'password'          => bcrypt('editor@sagufoundation.org'),
        //     'status'           => 'Publish',
        // ]);
        // $editorDLHK->assignRole($editorRole);

        // // AUTHOR
        // $authorDLHK = User::create([
        //     'name'              => 'Author',
        //     'slug'              => 'author'.time().Str::random(12),
        //     'picture'           => '02.jpg',
        //     'email'             => 'author@sagufoundation.org',
        //     'password'          => bcrypt('author@sagufoundation.org'),
        //     'status'           => 'Publish',
        // ]);
        // $authorDLHK->assignRole($authorRole);

        // // SUPERVISOR
        // $supervisorDLHK = User::create([
        //     'name'              => 'Supervisor DLHK',
        //     'slug'              => 'supervisor-dlhk'.time().Str::random(12),
        //     'picture'           => '03.jpg',
        //     'email'             => 'supervisor@sagufoundation.org',
        //     'password'          => bcrypt('supervisor@sagufoundation.org'),
        //     'status'           => 'Publish',
        // ]);
        // $supervisorDLHK->assignRole($supervisorRole);

    }
}
