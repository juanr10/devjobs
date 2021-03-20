<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VacantsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacants')->insert([
            'title' => 'React Junior Developer',
            'description' => '<p align="justify"><b>Lorem ipsum dolor sit amet consectetur adipiscing elit habitant </b>nullam potenti cum, magna magnis nam penatibus laoreet montes erat sagittis nostra nec inceptos, orci vitae sem bibendum ligula blandit aliquam diam lectus nascetur. Cum duis libero taciti feugiat pretium dis, suscipit donec posuere condimentum neque sollicitudin accumsan, rutrum rhoncus blandit integer malesuada. Pretium rhoncus accumsan convallis tristique torquent taciti varius lectus molestie, sapien pharetra netus dapibus et ante fermentum per, lobortis nam hendrerit quis aenean nulla malesuada suscipit. Ornare euismod dui erat maecenas purus natoque a, tellus risus placerat inceptos vulputate vestibulum penatibus libero, taciti eu ridiculus netus habitant nec.</p><p><br></p><p align="justify">Pretium condimentum odio orci donec nascetur facilisis a tristique dictumst, et penatibus massa vestibulum quis non hendrerit vulputate dis, pharetra enim justo varius curabitur parturient natoque diam. Scelerisque etiam vitae laoreet accumsan penatibus justo dictum, natoque praesent nunc at neque nascetur curabitur bibendum, placerat orci morbi nisl felis eros. Quam nibh ad mollis tincidunt montes nascetur, est luctus primis ante eros senectus, gravida quis accumsan dis tempor. Volutpat tristique parturient neque vestibulum congue nostra ac, proin taciti justo magnis lacinia cum, quis porta odio cubilia mi in.</p>',
            'category_id' => 1,
            'experience_id' => 3,
            'location_id' => 3,
            'salary_id' => 2,
            'user_id' => 1,
            'skills' => 'CSS3,Flexbox,ORM,SASS,C#,Flutter',
            'image' => "test.jpg",
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vacants')->insert([
            'title' => 'Vue Junior Developer',
            'description' => '<p align="justify"><b>Lorem ipsum dolor sit amet consectetur adipiscing elit habitant </b>nullam potenti cum, magna magnis nam penatibus laoreet montes erat sagittis nostra nec inceptos, orci vitae sem bibendum ligula blandit aliquam diam lectus nascetur. Cum duis libero taciti feugiat pretium dis, suscipit donec posuere condimentum neque sollicitudin accumsan, rutrum rhoncus blandit integer malesuada. Pretium rhoncus accumsan convallis tristique torquent taciti varius lectus molestie, sapien pharetra netus dapibus et ante fermentum per, lobortis nam hendrerit quis aenean nulla malesuada suscipit. Ornare euismod dui erat maecenas purus natoque a, tellus risus placerat inceptos vulputate vestibulum penatibus libero, taciti eu ridiculus netus habitant nec.</p><p><br></p><p align="justify">Pretium condimentum odio orci donec nascetur facilisis a tristique dictumst, et penatibus massa vestibulum quis non hendrerit vulputate dis, pharetra enim justo varius curabitur parturient natoque diam. Scelerisque etiam vitae laoreet accumsan penatibus justo dictum, natoque praesent nunc at neque nascetur curabitur bibendum, placerat orci morbi nisl felis eros. Quam nibh ad mollis tincidunt montes nascetur, est luctus primis ante eros senectus, gravida quis accumsan dis tempor. Volutpat tristique parturient neque vestibulum congue nostra ac, proin taciti justo magnis lacinia cum, quis porta odio cubilia mi in.</p>',
            'category_id' => 1,
            'experience_id' => 3,
            'location_id' => 6,
            'salary_id' => 3,
            'user_id' => 1,
            'skills' => 'CSS3,Flexbox,ORM,SASS,C#,Flutter',
            'image' => "test.jpg",
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vacants')->insert([
            'title' => 'Flutter Senior Developer',
            'description' => '<p align="justify"><b>Lorem ipsum dolor sit amet consectetur adipiscing elit habitant </b>nullam potenti cum, magna magnis nam penatibus laoreet montes erat sagittis nostra nec inceptos, orci vitae sem bibendum ligula blandit aliquam diam lectus nascetur. Cum duis libero taciti feugiat pretium dis, suscipit donec posuere condimentum neque sollicitudin accumsan, rutrum rhoncus blandit integer malesuada. Pretium rhoncus accumsan convallis tristique torquent taciti varius lectus molestie, sapien pharetra netus dapibus et ante fermentum per, lobortis nam hendrerit quis aenean nulla malesuada suscipit. Ornare euismod dui erat maecenas purus natoque a, tellus risus placerat inceptos vulputate vestibulum penatibus libero, taciti eu ridiculus netus habitant nec.</p><p><br></p><p align="justify">Pretium condimentum odio orci donec nascetur facilisis a tristique dictumst, et penatibus massa vestibulum quis non hendrerit vulputate dis, pharetra enim justo varius curabitur parturient natoque diam. Scelerisque etiam vitae laoreet accumsan penatibus justo dictum, natoque praesent nunc at neque nascetur curabitur bibendum, placerat orci morbi nisl felis eros. Quam nibh ad mollis tincidunt montes nascetur, est luctus primis ante eros senectus, gravida quis accumsan dis tempor. Volutpat tristique parturient neque vestibulum congue nostra ac, proin taciti justo magnis lacinia cum, quis porta odio cubilia mi in.</p>',
            'category_id' => 1,
            'experience_id' => 3,
            'location_id' => 4,
            'salary_id' => 1,
            'user_id' => 1,
            'skills' => 'CSS3,Flexbox,ORM,SASS,C#,Flutter',
            'image' => "test.jpg",
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vacants')->insert([
            'title' => 'Laravel Senior Developer',
            'description' => '<p align="justify"><b>Lorem ipsum dolor sit amet consectetur adipiscing elit habitant </b>nullam potenti cum, magna magnis nam penatibus laoreet montes erat sagittis nostra nec inceptos, orci vitae sem bibendum ligula blandit aliquam diam lectus nascetur. Cum duis libero taciti feugiat pretium dis, suscipit donec posuere condimentum neque sollicitudin accumsan, rutrum rhoncus blandit integer malesuada. Pretium rhoncus accumsan convallis tristique torquent taciti varius lectus molestie, sapien pharetra netus dapibus et ante fermentum per, lobortis nam hendrerit quis aenean nulla malesuada suscipit. Ornare euismod dui erat maecenas purus natoque a, tellus risus placerat inceptos vulputate vestibulum penatibus libero, taciti eu ridiculus netus habitant nec.</p><p><br></p><p align="justify">Pretium condimentum odio orci donec nascetur facilisis a tristique dictumst, et penatibus massa vestibulum quis non hendrerit vulputate dis, pharetra enim justo varius curabitur parturient natoque diam. Scelerisque etiam vitae laoreet accumsan penatibus justo dictum, natoque praesent nunc at neque nascetur curabitur bibendum, placerat orci morbi nisl felis eros. Quam nibh ad mollis tincidunt montes nascetur, est luctus primis ante eros senectus, gravida quis accumsan dis tempor. Volutpat tristique parturient neque vestibulum congue nostra ac, proin taciti justo magnis lacinia cum, quis porta odio cubilia mi in.</p>',
            'category_id' => 2,
            'experience_id' => 3,
            'location_id' => 3,
            'salary_id' => 2,
            'user_id' => 2,
            'skills' => 'CSS3,Flexbox,PHP,SASS,Laravel,Symfony',
            'image' => "test.jpg",
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vacants')->insert([
            'title' => 'Node & Express Developer',
            'description' => '<p align="justify"><b>Lorem ipsum dolor sit amet consectetur adipiscing elit habitant </b>nullam potenti cum, magna magnis nam penatibus laoreet montes erat sagittis nostra nec inceptos, orci vitae sem bibendum ligula blandit aliquam diam lectus nascetur. Cum duis libero taciti feugiat pretium dis, suscipit donec posuere condimentum neque sollicitudin accumsan, rutrum rhoncus blandit integer malesuada. Pretium rhoncus accumsan convallis tristique torquent taciti varius lectus molestie, sapien pharetra netus dapibus et ante fermentum per, lobortis nam hendrerit quis aenean nulla malesuada suscipit. Ornare euismod dui erat maecenas purus natoque a, tellus risus placerat inceptos vulputate vestibulum penatibus libero, taciti eu ridiculus netus habitant nec.</p><p><br></p><p align="justify">Pretium condimentum odio orci donec nascetur facilisis a tristique dictumst, et penatibus massa vestibulum quis non hendrerit vulputate dis, pharetra enim justo varius curabitur parturient natoque diam. Scelerisque etiam vitae laoreet accumsan penatibus justo dictum, natoque praesent nunc at neque nascetur curabitur bibendum, placerat orci morbi nisl felis eros. Quam nibh ad mollis tincidunt montes nascetur, est luctus primis ante eros senectus, gravida quis accumsan dis tempor. Volutpat tristique parturient neque vestibulum congue nostra ac, proin taciti justo magnis lacinia cum, quis porta odio cubilia mi in.</p>',
            'category_id' => 2,
            'experience_id' => 3,
            'location_id' => 6,
            'salary_id' => 3,
            'user_id' => 2,
            'skills' => 'Node,Express,JavaScript,TypeScript,Mongoose',
            'image' => "test.jpg",
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vacants')->insert([
            'title' => 'Wordpress Developer',
            'description' => '<p align="justify"><b>Lorem ipsum dolor sit amet consectetur adipiscing elit habitant </b>nullam potenti cum, magna magnis nam penatibus laoreet montes erat sagittis nostra nec inceptos, orci vitae sem bibendum ligula blandit aliquam diam lectus nascetur. Cum duis libero taciti feugiat pretium dis, suscipit donec posuere condimentum neque sollicitudin accumsan, rutrum rhoncus blandit integer malesuada. Pretium rhoncus accumsan convallis tristique torquent taciti varius lectus molestie, sapien pharetra netus dapibus et ante fermentum per, lobortis nam hendrerit quis aenean nulla malesuada suscipit. Ornare euismod dui erat maecenas purus natoque a, tellus risus placerat inceptos vulputate vestibulum penatibus libero, taciti eu ridiculus netus habitant nec.</p><p><br></p><p align="justify">Pretium condimentum odio orci donec nascetur facilisis a tristique dictumst, et penatibus massa vestibulum quis non hendrerit vulputate dis, pharetra enim justo varius curabitur parturient natoque diam. Scelerisque etiam vitae laoreet accumsan penatibus justo dictum, natoque praesent nunc at neque nascetur curabitur bibendum, placerat orci morbi nisl felis eros. Quam nibh ad mollis tincidunt montes nascetur, est luctus primis ante eros senectus, gravida quis accumsan dis tempor. Volutpat tristique parturient neque vestibulum congue nostra ac, proin taciti justo magnis lacinia cum, quis porta odio cubilia mi in.</p>',
            'category_id' => 2,
            'experience_id' => 3,
            'location_id' => 4,
            'salary_id' => 1,
            'user_id' => 2,
            'skills' => 'CSS3,Flexbox,PHP,SASS,WordPress,Symfony',
            'image' => "test.jpg",
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}
