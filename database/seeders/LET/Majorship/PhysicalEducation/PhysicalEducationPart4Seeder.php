<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...

         // Part 4: Athletics (Track & Field) and Dual Sports (Tennis, Badminton)

        //1
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which event is run over 100 meters on a straight track?',
            'choices'    => json_encode([
                '100m dash',
                '200m sprint',
                '400m relay',
                '800m run',
            ]),
            'answer'     => '100m dash',
            'explanation'=> 'The 100m dash is a straight sprint over 100 meters.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //2
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'How high is the bar set in the men’s high jump competition in major meets?',
            'choices'    => json_encode([
                'Variable height cleared by athlete',
                '10 meters',
                '2.44 meters fixed',
                '1.5 meters',
            ]),
            'answer'     => 'Variable height cleared by athlete',
            'explanation'=> 'Athletes choose progressive bar heights to clear, not a fixed standard.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //3
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which field event measures the distance jumped after a running approach and landing in sand?',
            'choices'    => json_encode([
                'Long jump',
                'Triple jump',
                'High jump',
                'Pole vault',
            ]),
            'answer'     => 'Long jump',
            'explanation'=> 'In long jump, athletes run up and leap into a sand pit to measure distance.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //4
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which throwing event uses a metal sphere resting in the athlete’s hand?',
            'choices'    => json_encode([
                'Shot put',
                'Javelin throw',
                'Discus throw',
                'Hammer throw',
            ]),
            'answer'     => 'Shot put',
            'explanation'=> 'Shot put involves pushing a heavy metal ball as far as possible.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //5
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'The decathlon consists of how many track and field events?',
            'choices'    => json_encode([
                '10',
                '8',
                '5',
                '12',
            ]),
            'answer'     => '10',
            'explanation'=> 'Deca- means ten; the decathlon comprises ten different events.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //6
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'In the 4x100m relay, how many meters does each athlete run?',
            'choices'    => json_encode([
                '100 meters',
                '400 meters',
                '200 meters',
                '50 meters',
            ]),
            'answer'     => '100 meters',
            'explanation'=> 'Each of the four runners covers 100 meters, totaling 400 meters.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //7
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which hurdle height is used in the men’s 110m hurdles event?',
            'choices'    => json_encode([
                '1.067 meters',
                '0.914 meters',
                '1.219 meters',
                '0.762 meters',
            ]),
            'answer'     => '1.067 meters',
            'explanation'=> 'Men’s high hurdles are set at 1.067 meters in the 110m event.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //8
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which event combines long jump, shot put, and 200m sprint among others for women in multi-event competition?',
            'choices'    => json_encode([
                'Heptathlon',
                'Decathlon',
                'Triathlon',
                'Pentathlon',
            ]),
            'answer'     => 'Heptathlon',
            'explanation'=> 'Heptathlon includes seven events for women, combining track and field disciplines.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //9
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'What is the standard weight of a women’s javelin in international competition?',
            'choices'    => json_encode([
                '600 grams',
                '700 grams',
                '800 grams',
                '900 grams',
            ]),
            'answer'     => '600 grams',
            'explanation'=> 'Women’s javelins weigh 600 grams in senior international events.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //10
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which dual sport uses a shuttlecock and a racket?',
            'choices'    => json_encode([
                'Badminton',
                'Tennis',
                'Table Tennis',
                'Squash',
            ]),
            'answer'     => 'Badminton',
            'explanation'=> 'Badminton players hit a shuttlecock with rackets over a net.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //11
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'How many games must a player win to win a standard tennis set?',
            'choices'    => json_encode([
                '6 games with two-game advantage',
                '5 games',
                '7 games exactly',
                '4 games with one-game lead',
            ]),
            'answer'     => '6 games with two-game advantage',
            'explanation'=> 'A tennis set is won by the first player to 6 games with at least a two-game lead.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //12
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'In badminton, how many points are played to win a game under rally scoring?',
            'choices'    => json_encode([
                '21 points',
                '15 points',
                '25 points',
                '11 points',
            ]),
            'answer'     => '21 points',
            'explanation'=> 'Modern badminton games use rally scoring to 21 points per game.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //13
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'What is a fault in tennis when the server does not land the serve in the service box called?',
            'choices'    => json_encode([
                'Let',
                'Stroke',
                'Net',
                'Foot fault',
            ]),
            'answer'     => 'Let',
            'explanation'=> 'A let is called when a served ball touches the net and lands in the service box.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //14
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which grip is most commonly used for a forehand stroke in tennis?',
            'choices'    => json_encode([
                'Eastern grip',
                'Continental grip',
                'Western grip',
                'Reverse grip',
            ]),
            'answer'     => 'Eastern grip',
            'explanation'=> 'The Eastern grip facilitates flat and topspin forehand strokes.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //15
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'In badminton, what is the term for winning a rally that begins with the serve?',
            'choices'    => json_encode([
                'Rally point',
                'Serve point',
                'Ace',
                'Smash',
            ]),
            'answer'     => 'Ace',
            'explanation'=> 'An ace is a legal serve that wins the rally without return.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //16
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'How many players are on each side in a standard doubles tennis match?',
            'choices'    => json_encode([
                '2',
                '4',
                '1',
                '3',
            ]),
            'answer'     => '2',
            'explanation'=> 'Doubles tennis features two players per team on court.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //17
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'Which stroke in tennis is executed close to the net with a gentle tap?',
            'choices'    => json_encode([
                'Volley',
                'Backhand',
                'Serve',
                'Lob',
            ]),
            'answer'     => 'Volley',
            'explanation'=> 'A volley is struck before the ball bounces, usually near the net.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //18
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'In badminton, which stroke uses a downward hit with power to finish the rally?',
            'choices'    => json_encode([
                'Smash',
                'Drive',
                'Clear',
                'Net drop',
            ]),
            'answer'     => 'Smash',
            'explanation'=> 'A smash is a high-speed downward shot aimed to win the point.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //19
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'What is the baseline area in tennis?',
            'choices'    => json_encode([
                'The back boundary line of the court',
                'The net area',
                'The service box',
                'The sidelines',
            ]),
            'answer'     => 'The back boundary line of the court',
            'explanation'=> 'The baseline marks the rear limits for play in tennis.',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        //20
        $batch[] = [
            'subject_id' => 18,
            'part'       => 4,
            'question'   => 'In track and field, what does the term wind gauge measure?',
            'choices'    => json_encode([
                'Wind speed during sprints and jumps',
                'Temperature on track',
                'Humidity levels',
                'Air pressure',
            ]),
            'answer'     => 'Wind speed during sprints and jumps',
            'explanation'=> 'Wind gauges record tailwind or headwind speeds affecting performance legality.',
            'created_at' => $now,
            'updated_at' => $now,
        ];




        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
