<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_staff = Role::where('name', 'Staff')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $user = new User;
        $user->first_name = 'Bugra';
        $user->last_name = 'Customer';
        $user->email = 'customer@example.com';
        $user->password = bcrypt('customer');
        $user->save();
		
        $user->roles()->attach($role_user);
        $admin = new User;
        $admin->first_name = 'Ali';
        $admin->last_name = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
		
        $admin->roles()->attach($role_admin);
        $staff = new User;
        $staff->first_name = 'Cengiz';
        $staff->last_name = 'staff';
        $staff->email = 'staff@example.com';
        $staff->password = bcrypt('staff');
        $staff->save();
        $staff->roles()->attach($role_staff);
		
		$staff = new User;
        $staff->first_name = 'Alptug';
        $staff->last_name = 'staff1';
        $staff->email = 'staff1@example.com';
        $staff->password = bcrypt('staff');
        $staff->save();
        $staff->roles()->attach($role_staff);
		
		 $admin = new User;
        $admin->first_name = 'Mert';
        $admin->last_name = 'Admin1';
        $admin->email = 'admin1@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
		$admin->roles()->attach($role_admin);
		   $user = new User;
        $user->first_name = 'anil';
        $user->last_name = 'customer1';
        $user->email = 'customer1@example.com';
        $user->password = bcrypt('customer');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
?>