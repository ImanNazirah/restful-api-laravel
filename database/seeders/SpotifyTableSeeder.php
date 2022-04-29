<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpotifySong;


class SpotifyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resource dataset :  https://www.kaggle.com/leonardopena/top50spotify2019
        
        $data = 
            array(         
                [
                  'track_name'=> 'Senorita',
                  'artist_name'=> 'Shawn Mendes',
                  'genre'=> 'canadian pop',
                  'popularity'=> 79
                ],
                [
                  'track_name'=> 'China',
                  'artist_name'=> 'Anuel AA',
                  'genre'=> 'reggaeton flow',
                  'popularity'=> 92
                ],
                [
                  'track_name'=> 'boyfriend (with Social House)',
                  'artist_name'=> 'Ariana Grande',
                  'genre'=> 'dance pop',
                  'popularity'=> 85
                ],
                [
                  'track_name'=> 'Beautiful People (feat. Khalid)',
                  'artist_name'=> 'Ed Sheeran',
                  'genre'=> 'pop',
                  'popularity'=> 86
                ],
                [
                  'track_name'=> 'Goodbyes (Feat. Young Thug)',
                  'artist_name'=> 'Post Malone',
                  'genre'=> 'dfw rap',
                  'popularity'=> 94
                ],
                [
                  'track_name'=> 'I Dont Care (with Justin Bieber)',
                  'artist_name'=> 'Ed Sheeran',
                  'genre'=> 'pop',
                  'popularity'=> 84
                ],
                [
                  'track_name'=> 'Ransom',
                  'artist_name'=> 'Lil Tecca',
                  'genre'=> 'trap music',
                  'popularity'=> 92
                ],
                [
                  'track_name'=> 'How Do You Sleep?',
                  'artist_name'=> 'Sam Smith',
                  'genre'=> 'pop',
                  'popularity'=> 90
                ],
                [
                  'track_name'=> 'Old Town Road - Remix',
                  'artist_name'=> 'Lil Nas X',
                  'genre'=> 'country rap',
                  'popularity'=> 87
                ],
                [
                   
                  'track_name'=> 'bad guy',
                  'artist_name'=> 'Billie Eilish',
                  'genre'=> 'electropop',
                  'popularity'=> 95
                ],
                [
                   
                  'track_name'=> 'Callaita',
                  'artist_name'=> 'Bad Bunny',
                  'genre'=> 'reggaeton',
                  'popularity'=> 93
                ],
                [
                   
                  'track_name'=> 'Loco Contigo (feat. J. Balvin & Tyga)',
                  'artist_name'=> 'DJ Snake',
                  'genre'=> 'dance pop',
                  'popularity'=> 86
                ],
                [
                   
                  'track_name'=> 'Someone You Loved',
                  'artist_name'=> 'Lewis Capaldi',
                  'genre'=> 'pop',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'Otro Trago - Remix',
                  'artist_name'=> 'Sech',
                  'genre'=> 'panamanian pop',
                  'popularity'=> 87
                ],
                [
                   
                  'track_name'=> 'Money In The Grave (Drake ft. Rick Ross)',
                  'artist_name'=> 'Drake',
                  'genre'=> 'canadian hip hop',
                  'popularity'=> 92
                ],
                [
                   
                  'track_name'=> 'No Guidance (feat. Drake)',
                  'artist_name'=> 'Chris Brown',
                  'genre'=> 'dance pop',
                  'popularity'=> 82
                ],
                [
                   
                  'track_name'=> 'LA CANC',
                  'artist_name'=> 'J Balvin',
                  'genre'=> 'latin',
                  'popularity'=> 90
                ],
                [
                   
                  'track_name'=> 'Sunflower - Spider-Man=> Into the Spider-Verse',
                  'artist_name'=> 'Post Malone',
                  'genre'=> 'dfw rap',
                  'popularity'=> 91
                ],
                [
                   
                  'track_name'=> 'Lalala',
                  'artist_name'=> 'Y2K',
                  'genre'=> 'canadian hip hop',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'Truth Hurts',
                  'artist_name'=> 'Lizzo',
                  'genre'=> 'escape room',
                  'popularity'=> 91
                ],
                [
                   
                  'track_name'=> 'Piece Of Your Heart',
                  'artist_name'=> 'MEDUZA',
                  'genre'=> 'pop house',
                  'popularity'=> 91
                ],
                [
                   
                  'track_name'=> 'Panini',
                  'artist_name'=> 'Lil Nas X',
                  'genre'=> 'country rap',
                  'popularity'=> 91
                ],
                [
                   
                  'track_name'=> 'No Me Conoce - Remix',
                  'artist_name'=> 'Jhay Cortez',
                  'genre'=> 'reggaeton flow',
                  'popularity'=> 83
                ],
                [
                   
                  'track_name'=> 'Soltera - Remix',
                  'artist_name'=> 'Lunay',
                  'genre'=> 'latin',
                  'popularity'=> 91
                ],
                [
                   
                  'track_name'=> 'bad guy (with Justin Bieber)',
                  'artist_name'=> 'Billie Eilish',
                  'genre'=> 'electropop',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> 'If I Cant Have You',
                  'artist_name'=> 'Shawn Mendes',
                  'genre'=> 'canadian pop',
                  'popularity'=> 70
                ],
                [
                   
                  'track_name'=> 'Dance Monkey',
                  'artist_name'=> 'Tones and I',
                  'genre'=> 'australian pop',
                  'popularity'=> 83
                ],
                [
                   
                  'track_name'=> 'Its You',
                  'artist_name'=> 'Ali Gatie',
                  'genre'=> 'canadian hip hop',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> 'Con Calma',
                  'artist_name'=> 'Daddy Yankee',
                  'genre'=> 'latin',
                  'popularity'=> 91
                ],
                [
                   
                  'track_name'=> 'QUE PRETENDES',
                  'artist_name'=> 'J Balvin',
                  'genre'=> 'latin',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> 'Takeaway',
                  'artist_name'=> 'The Chainsmokers',
                  'genre'=> 'edm',
                  'popularity'=> 84
                ],
                [
                   
                  'track_name'=> '7 rings',
                  'artist_name'=> 'Ariana Grande',
                  'genre'=> 'dance pop',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> '0.958333333',
                  'artist_name'=> 'Maluma',
                  'genre'=> 'reggaeton',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> 'The London (feat. J. Cole & Travis Scott)',
                  'artist_name'=> 'Young Thug',
                  'genre'=> 'atl hip hop',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> 'Never Really Over',
                  'artist_name'=> 'Katy Perry',
                  'genre'=> 'dance pop',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> 'Summer Days (feat. Macklemore & Patrick Stump of Fall Out Boy)',
                  'artist_name'=> 'Martin Garrix',
                  'genre'=> 'big room',
                  'popularity'=> 89
                ],
                [
                   
                  'track_name'=> 'Otro Trago',
                  'artist_name'=> 'Sech',
                  'genre'=> 'panamanian pop',
                  'popularity'=> 91
                ],
                [
                   
                  'track_name'=> 'Antisocial (with Travis Scott)',
                  'artist_name'=> 'Ed Sheeran',
                  'genre'=> 'pop',
                  'popularity'=> 87
                ],
                [
                   
                  'track_name'=> 'Sucker',
                  'artist_name'=> 'Jonas Brothers',
                  'genre'=> 'boy band',
                  'popularity'=> 80
                ],
                [
                   
                  'track_name'=> 'fuck, im lonely (with Anne-Marie)',
                  'artist_name'=> 'Lauv',
                  'genre'=> 'dance pop',
                  'popularity'=> 78
                ],
                [
                   
                  'track_name'=> 'Higher Love',
                  'artist_name'=> 'Kygo',
                  'genre'=> 'edm',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'You Need To Calm Down',
                  'artist_name'=> 'Taylor Swift',
                  'genre'=> 'dance pop',
                  'popularity'=> 90
                ],
                [
                   
                  'track_name'=> 'Shallow',
                  'artist_name'=> 'Lady Gaga',
                  'genre'=> 'dance pop',
                  'popularity'=> 87
                ],
                [
                   
                  'track_name'=> 'Talk',
                  'artist_name'=> 'Khalid',
                  'genre'=> 'pop',
                  'popularity'=> 84
                ],
                [
                   
                  'track_name'=> 'Con Altura',
                  'artist_name'=> 'ROSAL',
                  'genre'=> 'r&b en espanol',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'One Thing Right',
                  'artist_name'=> 'Marshmello',
                  'genre'=> 'brostep',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'Te Robar',
                  'artist_name'=> 'Nicky Jam',
                  'genre'=> 'latin',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'Happier',
                  'artist_name'=> 'Marshmello',
                  'genre'=> 'brostep',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'Call You Mine',
                  'artist_name'=> 'The Chainsmokers',
                  'genre'=> 'edm',
                  'popularity'=> 88
                ],
                [
                   
                  'track_name'=> 'Cross Me (feat. Chance the Rapper & PnB Rock)',
                  'artist_name'=> 'Ed Sheeran',
                  'genre'=> 'pop',
                  'popularity'=> 82
                ]
               
            
            );

        SpotifySong::insert($data);
        
    }
}
