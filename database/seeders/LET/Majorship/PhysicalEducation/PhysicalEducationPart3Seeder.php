<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart3Seeder extends Seeder
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

       $batch = [];

       // Part 3: Team Sports & Aquatics

       //1
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'How many players from each team are on the court during a standard basketball game?',
           'choices'     => json_encode([
               '5',
               '6',
               '7',
               '4',
           ]),
           'answer'      => '5',
           'explanation' => 'A basketball team fields five players on the court at any given time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'What is the duration of each quarter in an international (FIBA) basketball game?',
           'choices'     => json_encode([
               '10 minutes',
               '12 minutes',
               '8 minutes',
               '15 minutes',
           ]),
           'answer'      => '10 minutes',
           'explanation' => 'FIBA games consist of four 10-minute quarters.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'How many points is a free throw worth in basketball?',
           'choices'     => json_encode([
               '1',
               '2',
               '3',
               '0',
           ]),
           'answer'      => '1',
           'explanation' => 'Each successful free throw is worth one point.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'At what distance from the basket is the three-point line in international basketball?',
           'choices'     => json_encode([
               '6.75 meters',
               '7.25 meters',
               '6.25 meters',
               '7.5 meters',
           ]),
           'answer'      => '6.75 meters',
           'explanation' => 'The FIBA three-point line is set at 6.75 meters from the basket.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'What constitutes a traveling violation in basketball?',
           'choices'     => json_encode([
               'Moving one’s pivot foot illegally',
               'Dribbling with two hands',
               'Blocking a shot',
               'Reaching in',
           ]),
           'answer'      => 'Moving one’s pivot foot illegally',
           'explanation' => 'Traveling occurs when a player lifts or moves the pivot foot unlawfully while holding the ball.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'How many players on each side participate during a standard water polo match in the pool?',
           'choices'     => json_encode([
               '7',
               '6',
               '8',
               '9',
           ]),
           'answer'      => '7',
           'explanation' => 'Water polo teams field seven players (six field players plus one goalkeeper).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'What is the shot clock duration in elite water polo competitions?',
           'choices'     => json_encode([
               '30 seconds',
               '24 seconds',
               '45 seconds',
               '60 seconds',
           ]),
           'answer'      => '30 seconds',
           'explanation' => 'Teams have 30 seconds to take a shot on goal in water polo.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'In volleyball, how many sets must a team win to secure a match in standard play?',
           'choices'     => json_encode([
               '3 out of 5 sets',
               '2 out of 3 sets',
               '4 out of 7 sets',
               '1 set only',
           ]),
           'answer'      => '3 out of 5 sets',
           'explanation' => 'Most indoor volleyball matches are best-of-five sets, with the fifth set to 15 points.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'What is the minimum number of players required to start a soccer match per team?',
           'choices'     => json_encode([
               '7',
               '8',
               '9',
               '11',
           ]),
           'answer'      => '7',
           'explanation' => 'Under FIFA rules, a match cannot start or continue if a team has fewer than seven players.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'How long is each half in a standard field hockey game?',
           'choices'     => json_encode([
               '35 minutes',
               '30 minutes',
               '40 minutes',
               '45 minutes',
           ]),
           'answer'      => '35 minutes',
           'explanation' => 'International field hockey matches consist of two 35-minute halves.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'What term describes restarting play in soccer with a direct free kick?',
           'choices'     => json_encode([
               'Foul outside the penalty area',
               'Offside call',
               'Goal kick',
               'Throw-in',
           ]),
           'answer'      => 'Foul outside the penalty area',
           'explanation' => 'A direct free kick is awarded for fouls committed outside the penalty area.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'In swimming, which stroke is characterized by an alternating arm pull and flutter kick performed face down?',
           'choices'     => json_encode([
               'Freestyle',
               'Breaststroke',
               'Backstroke',
               'Butterfly',
           ]),
           'answer'      => 'Freestyle',
           'explanation' => 'Freestyle allows any technique but typically uses the front crawl for speed.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'What is the standard pool length for Olympic swimming competitions?',
           'choices'     => json_encode([
               '50 meters',
               '25 meters',
               '100 meters',
               '75 meters',
           ]),
           'answer'      => '50 meters',
           'explanation' => 'Olympic pools are 50 meters long, known as long-course pools.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'Which swimming relay involves all four strokes in order: butterfly, backstroke, breaststroke, freestyle?',
           'choices'     => json_encode([
               'Medley relay',
               'Freestyle relay',
               'Mixed relay',
               'Sprint relay',
           ]),
           'answer'      => 'Medley relay',
           'explanation' => 'In a medley relay, each of four swimmers performs a different stroke.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'In water polo, how many periods are there in a match?',
           'choices'     => json_encode([
               '4 periods',
               '2 halves',
               '3 periods',
               '6 quarters',
           ]),
           'answer'      => '4 periods',
           'explanation' => 'Water polo matches consist of four periods, each typically 8 minutes long.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'Which piece of equipment is essential for safety in competitive rugby?',
           'choices'     => json_encode([
               'Mouthguard',
               'Helmet',
               'Knee pads',
               'Elbow pads',
           ]),
           'answer'      => 'Mouthguard',
           'explanation' => 'Rugby players wear mouthguards to protect teeth and reduce concussion risk.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'What is an “offside” in field hockey?',
           'choices'     => json_encode([
               'No offside rule in field hockey',
               'Attacking player closer to goal than the ball',
               'Ball leaving the field of play',
               'Goalkeeper leaving the goal area',
           ]),
           'answer'      => 'No offside rule in field hockey',
           'explanation' => 'Field hockey eliminated the offside rule in 1998 to encourage attacking play.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'Which dive involves a swimmer jumping into water headfirst with arms extended straight overhead?',
           'choices'     => json_encode([
               'A dive',
               'Cannonball',
               'Pike dive',
               'Tuck dive',
           ]),
           'answer'      => 'A dive',
           'explanation' => 'An A dive is the simplest headfirst dive with a straight body position.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'At what height is platform diving performed in Olympic competitions?',
           'choices'     => json_encode([
               '10 meters',
               '5 meters',
               '3 meters',
               '7 meters',
           ]),
           'answer'      => '10 meters',
           'explanation' => 'Olympic platform diving is conducted from a 10-meter platform.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 3,
           'question'    => 'How many players are on the field for each team in a standard rugby union match?',
           'choices'     => json_encode([
               '15',
               '13',
               '11',
               '7',
           ]),
           'answer'      => '15',
           'explanation' => 'Rugby union teams consist of 15 players per side on the field.',
           'created_at'  => $now,
           'updated_at'  => $now,
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
