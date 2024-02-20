<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
               [
                "type_id" => '1',
                "title" => "Comics",
                "description" => "I comics possono coprire una vasta gamma di generi e argomenti, tra cui supereroi, fantasy, avventura, horror, umorismo e molto altro ancora. Sono popolari in tutto il mondo e hanno una lunga storia che risale a decenni.
                    Tra i più famosi editori di fumetti ci sono Marvel Comics e DC Comics, noti soprattutto per i loro universi di supereroi come Spider-Man, Batman, Superman, X-Men e molti altri. ",
                "thumb" => "https://i.pinimg.com/originals/a5/1e/57/a51e57c5033fdc3ade487d4b3be79e5f.jpg"
                ],
            [
                "type_id" => '2',
                "title" => "Pokemon",
                "description" => " mondo di Pokémon è abitato da creature chiamate Pokémon, che gli allenatori possono catturare e addestrare. 
                Ci sono centinaia di specie di Pokémon, ognuna con caratteristiche e abilità uniche. Alcuni Pokémon possono volare, altri possono nuotare, altri ancora possono lanciare potenti attacchi elementali.",
                "thumb" => "https://cdn.dribbble.com/users/1639927/screenshots/15128634/media/7ff8ed6811ef601888f737c84af2e7a7.gif"
            ],
            [
                "type_id" => '3',
                "title" => "Spotify",
                "description" => "Spotify è una piattaforma di streaming musicale che consente agli utenti di ascoltare una vasta gamma di brani musicali, album, podcast e altro ancora su richiesta attraverso Internet.",
                "thumb" => "https://techcrunch.com/wp-content/uploads/2021/03/Desktop-Home-1.png?w=730&crop=1"
            ],
            [
                "type_id" => '2',
                "title" => "Dropbox",
                "description" => "Dropbox è un servizio di archiviazione cloud che consente agli utenti di caricare, archiviare e condividere file e documenti digitali su Internet.",
                "thumb" => "https://aem.dropbox.com/cms/content/dam/dropbox/blog/files/2019/06/new-dropbox-social-preview.png"
            ],
     
       ];

       foreach ($projects as $project) {
        Project::create($project); 
    }
    }
}
