<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title'=>'Jujutsu Kaisen Volume.0',
            'description'=>"Yuji Itadori is resolved to save the world from cursed demons, but he soon learns that the best way to do it is to slowly lose his humanity and become one himself! In a world where cursed spirits feed on unsuspecting humans, fragments of the legendary and feared demon Ryomen Sukuna were lost and scattered about. Should any demon consume Sukuna's body parts, the power they gain could destroy the world as we know it. Fortunately, there exists a mysterious school of Jujutsu Sorcerers who exist to protect the precarious existence of the living from the supernatural! While investigating a strange set of mysterious deaths, Itadori meets Junpei, a troubled kid who is often bullied at school. However, Junpei is also befriended by the culprit behind the bloody incident-Mahito, a mischievous cursed spirit! Mahito sets in motion a devious plan involving Junpei, hoping to ensnare Itadori as well.",
            'author'=>'Akutami Gege',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-06-01',
            'ISBN'=>'9781974710027',
            'image'=>'jujutsukaisen1.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Jujutsu Kaisen Volume.1',
            'description'=>"Yuji Itadori is resolved to save the world from cursed demons, but he soon learns that the best way to do it is to slowly lose his humanity and become one himself! In a world where cursed spirits feed on unsuspecting humans, fragments of the legendary and feared demon Ryomen Sukuna were lost and scattered about. Should any demon consume Sukuna's body parts, the power they gain could destroy the world as we know it. Fortunately, there exists a mysterious school of Jujutsu Sorcerers who exist to protect the precarious existence of the living from the supernatural! While investigating a strange set of mysterious deaths, Itadori meets Junpei, a troubled kid who is often bullied at school. However, Junpei is also befriended by the culprit behind the bloody incident-Mahito, a mischievous cursed spirit! Mahito sets in motion a devious plan involving Junpei, hoping to ensnare Itadori as well.",
            'author'=>'Akutami Gege',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-06-01',
            'ISBN'=>'9781974710027',
            'image'=>'jujutsukaisen2.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Jujutsu Kaisen Volume.2',
            'description'=>"Yuji Itadori is resolved to save the world from cursed demons, but he soon learns that the best way to do it is to slowly lose his humanity and become one himself! In a world where cursed spirits feed on unsuspecting humans, fragments of the legendary and feared demon Ryomen Sukuna were lost and scattered about. Should any demon consume Sukuna's body parts, the power they gain could destroy the world as we know it. Fortunately, there exists a mysterious school of Jujutsu Sorcerers who exist to protect the precarious existence of the living from the supernatural! While investigating a strange set of mysterious deaths, Itadori meets Junpei, a troubled kid who is often bullied at school. However, Junpei is also befriended by the culprit behind the bloody incident-Mahito, a mischievous cursed spirit! Mahito sets in motion a devious plan involving Junpei, hoping to ensnare Itadori as well.",
            'author'=>'Akutami Gege',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-06-01',
            'ISBN'=>'9781924710127',
            'image'=>'jujutsukaisen3.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Jujutsu Kaisen Volume.3',
            'description'=>"Yuji Itadori is resolved to save the world from cursed demons, but he soon learns that the best way to do it is to slowly lose his humanity and become one himself! In a world where cursed spirits feed on unsuspecting humans, fragments of the legendary and feared demon Ryomen Sukuna were lost and scattered about. Should any demon consume Sukuna's body parts, the power they gain could destroy the world as we know it. Fortunately, there exists a mysterious school of Jujutsu Sorcerers who exist to protect the precarious existence of the living from the supernatural! While investigating a strange set of mysterious deaths, Itadori meets Junpei, a troubled kid who is often bullied at school. However, Junpei is also befriended by the culprit behind the bloody incident-Mahito, a mischievous cursed spirit! Mahito sets in motion a devious plan involving Junpei, hoping to ensnare Itadori as well.",
            'author'=>'Akutami Gege',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-06-01',
            'ISBN'=>'9181974710027',
            'image'=>'jujutsukaisen4.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Chainsaw Man Volume.1',
            'description'=>"Broke young man + chainsaw dog demon = Chainsaw Man! Denji was a small-time devil hunter just trying to survive in a harsh world. After being killed on a job, he is revived by his pet devil-dog Pochita and becomes something new and dangerous-Chainsaw Man! Denji's a poor young man who'll do anything for money, even hunting down devils with his pet devil-dog Pochita. He's a simple man with simple dreams, drowning under a mountain of debt. But his sad life gets turned upside down one day when he's betrayed by someone he trusts. Now with the power of a devil inside him, Denji's become a whole new man-Chainsaw Man!",
            'author'=>'Tatsuki Fujimoto',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-10-01',
            'ISBN'=>'9181977710027',
            'image'=>'chainsawman1.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Chainsaw Man Volume.2',
            'description'=>"Broke young man + chainsaw dog demon = Chainsaw Man! Denji was a small-time devil hunter just trying to survive in a harsh world. After being killed on a job, he is revived by his pet devil-dog Pochita and becomes something new and dangerous-Chainsaw Man! Denji's a poor young man who'll do anything for money, even hunting down devils with his pet devil-dog Pochita. He's a simple man with simple dreams, drowning under a mountain of debt. But his sad life gets turned upside down one day when he's betrayed by someone he trusts. Now with the power of a devil inside him, Denji's become a whole new man-Chainsaw Man!",
            'author'=>'Tatsuki Fujimoto',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-10-01',
            'ISBN'=>'9181977710007',
            'image'=>'chainsawman2.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Chainsaw Man Volume.3',
            'description'=>"Broke young man + chainsaw dog demon = Chainsaw Man! Denji was a small-time devil hunter just trying to survive in a harsh world. After being killed on a job, he is revived by his pet devil-dog Pochita and becomes something new and dangerous-Chainsaw Man! Denji's a poor young man who'll do anything for money, even hunting down devils with his pet devil-dog Pochita. He's a simple man with simple dreams, drowning under a mountain of debt. But his sad life gets turned upside down one day when he's betrayed by someone he trusts. Now with the power of a devil inside him, Denji's become a whole new man-Chainsaw Man!",
            'author'=>'Tatsuki Fujimoto',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-10-01',
            'ISBN'=>'9181977410027',
            'image'=>'chainsawman3.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Chainsaw Man Volume.4',
            'description'=>"Broke young man + chainsaw dog demon = Chainsaw Man! Denji was a small-time devil hunter just trying to survive in a harsh world. After being killed on a job, he is revived by his pet devil-dog Pochita and becomes something new and dangerous-Chainsaw Man! Denji's a poor young man who'll do anything for money, even hunting down devils with his pet devil-dog Pochita. He's a simple man with simple dreams, drowning under a mountain of debt. But his sad life gets turned upside down one day when he's betrayed by someone he trusts. Now with the power of a devil inside him, Denji's become a whole new man-Chainsaw Man!",
            'author'=>'Tatsuki Fujimoto',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-10-01',
            'ISBN'=>'9186977710027',
            'image'=>'chainsawman4.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
        Book::create([
            'title'=>'Chainsaw Man Volume.5',
            'description'=>"Broke young man + chainsaw dog demon = Chainsaw Man! Denji was a small-time devil hunter just trying to survive in a harsh world. After being killed on a job, he is revived by his pet devil-dog Pochita and becomes something new and dangerous-Chainsaw Man! Denji's a poor young man who'll do anything for money, even hunting down devils with his pet devil-dog Pochita. He's a simple man with simple dreams, drowning under a mountain of debt. But his sad life gets turned upside down one day when he's betrayed by someone he trusts. Now with the power of a devil inside him, Denji's become a whole new man-Chainsaw Man!",
            'author'=>'Tatsuki Fujimoto',
            'publisher'=>'Viz',
            'genre'=>'Japanese Manga',
            'publication_date'=>'2020-10-01',
            'ISBN'=>'9181977770027',
            'image'=>'chainsawman5.jpg',
            'quantity'=>'50',
            'price'=>'49.99',
        ]);
    }
}
