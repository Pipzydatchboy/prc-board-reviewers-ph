<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart5Seeder extends Seeder
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

       // Part 5: Combative & Lifetime Sports

       //1
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In Olympic boxing, how many rounds are there for men’s bouts?',
           'choices'     => json_encode([
               '3 rounds of 3 minutes each',
               '5 rounds of 2 minutes each',
               '4 rounds of 4 minutes each',
               '6 rounds of 1 minute each',
           ]),
           'answer'      => '3 rounds of 3 minutes each',
           'explanation' => 'Men’s Olympic boxing consists of three rounds, each lasting three minutes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'Which scoring system is used in amateur boxing?',
           'choices'     => json_encode([
               '10-point must system',
               '5-point must system',
               'Round-robin scoring',
               'Judges’ consensus',
           ]),
           'answer'      => '10-point must system',
           'explanation' => 'Amateur boxing uses the 10-point must, where the winner of a round receives 10 points.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In judo, what score immediately ends the match?',
           'choices'     => json_encode([
               'Ippon',
               'Waza-ari',
               'Yuko',
               'Koka',
           ]),
           'answer'      => 'Ippon',
           'explanation' => 'An ippon, awarded for a perfect throw or hold, ends the match instantly.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'Which value does a Waza-ari carry in judo scoring?',
           'choices'     => json_encode([
               'Half an Ippon',
               'One full point',
               'Two full points',
               'No score',
           ]),
           'answer'      => 'Half an Ippon',
           'explanation' => 'A waza-ari is scored for near-perfect techniques and counts as half an ippon.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In karate kumite, how many points is an Ippon awarded?',
           'choices'     => json_encode([
               '3 points',
               '2 points',
               '1 point',
               '5 points',
           ]),
           'answer'      => '3 points',
           'explanation' => 'An ippon in WKF kumite is awarded three points for decisive techniques.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'Under World Taekwondo rules, how many points is a valid head kick?',
           'choices'     => json_encode([
               '3 points',
               '2 points',
               '1 point',
               '4 points',
           ]),
           'answer'      => '3 points',
           'explanation' => 'Head kicks score three points under current WT competition rules.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In wrestling, what ends a match immediately regardless of the score?',
           'choices'     => json_encode([
               'Pin (fall)',
               'Technical point gap',
               'Escape point',
               'Reversal point',
           ]),
           'answer'      => 'Pin (fall)',
           'explanation' => 'A fall or pin occurs when both shoulders are held on the mat, ending the match.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'Which wrestling style prohibits holds below the waist?',
           'choices'     => json_encode([
               'Greco-Roman',
               'Freestyle',
               'Folkstyle',
               'Sambo',
           ]),
           'answer'      => 'Greco-Roman',
           'explanation' => 'Greco-Roman forbids leg grabs, focusing on upper-body techniques.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In golf, what does the term “par” indicate for a hole?',
           'choices'     => json_encode([
               'Expected number of strokes by a skilled golfer',
               'Maximum allowed strokes',
               'Minimum possible strokes',
               'Average amateur strokes',
           ]),
           'answer'      => 'Expected number of strokes by a skilled golfer',
           'explanation' => 'Par is the standard target strokes for a hole for an expert player.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'What score is called a “birdie” in golf?',
           'choices'     => json_encode([
               'One stroke under par',
               'One stroke over par',
               'Two strokes under par',
               'Even par',
           ]),
           'answer'      => 'One stroke under par',
           'explanation' => 'A birdie is achieved when a hole is completed in one stroke less than par.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In bowling, how many pins are set up at the start of each frame?',
           'choices'     => json_encode([
               '10 pins',
               '9 pins',
               '8 pins',
               '12 pins',
           ]),
           'answer'      => '10 pins',
           'explanation' => 'Standard ten-pin bowling uses ten pins arranged in a triangular formation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'What term describes knocking down all pins with the first ball in bowling?',
           'choices'     => json_encode([
               'Strike',
               'Spare',
               'Split',
               'Gutter ball',
           ]),
           'answer'      => 'Strike',
           'explanation' => 'A strike occurs when a player knocks down all ten pins on the first throw.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'What is a “spare” in bowling?',
           'choices'     => json_encode([
               'Knocking down remaining pins on second ball',
               'Knocking all pins on first ball',
               'Missing all pins',
               'Throwing ball out of lane',
           ]),
           'answer'      => 'Knocking down remaining pins on second ball',
           'explanation' => 'A spare is made when all pins are cleared using both balls of a frame.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In table tennis, how many points are required to win a game?',
           'choices'     => json_encode([
               '11 points with two-point lead',
               '21 points with two-point lead',
               '15 points with one-point lead',
               '10 points exact',
           ]),
           'answer'      => '11 points with two-point lead',
           'explanation' => 'Modern table tennis games are played to 11 points, win by two.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'Which cycling event is considered the “King of the Mountains”?',
           'choices'     => json_encode([
               'Climbing stage in road races',
               'Sprint on velodrome',
               'Time trial flat course',
               'Criterium race',
           ]),
           'answer'      => 'Climbing stage in road races',
           'explanation' => 'Mountain stages challenge climbers and earn the King of the Mountains jersey.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In MMA (Mixed Martial Arts), what does TKO stand for?',
           'choices'     => json_encode([
               'Technical Knockout',
               'Total Knockout',
               'Timed Knockout',
               'True Knockout',
           ]),
           'answer'      => 'Technical Knockout',
           'explanation' => 'A TKO is called when the referee stops the fight for safety reasons.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'Which protective equipment is mandatory in taekwondo sparring?',
           'choices'     => json_encode([
               'Head guard and chest protector',
               'Knee pads',
               'Elbow pads',
               'Wrist wraps',
           ]),
           'answer'      => 'Head guard and chest protector',
           'explanation' => 'Taekwondo safety gear includes headgear and hogu to protect competitors.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'What is the term for a double-leg takedown in wrestling?',
           'choices'     => json_encode([
               'Single leg',
               'Double leg',
               'Sprawl',
               'Fireman’s carry',
           ]),
           'answer'      => 'Fireman’s carry',
           'explanation' => 'The fireman’s carry uses opponent’s body to execute a double-leg takedown.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'In Olympic archery, how many arrows are shot per end?',
           'choices'     => json_encode([
               '3 arrows',
               '6 arrows',
               '4 arrows',
               '5 arrows',
           ]),
           'answer'      => '3 arrows',
           'explanation' => 'Archers shoot three arrows per end at target from set distance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 5,
           'question'    => 'Which martial art uses colored belts to denote practitioner rank?',
           'choices'     => json_encode([
               'Karate',
               'Boxing',
               'Wrestling',
               'Taekwondo',
           ]),
           'answer'      => 'Karate',
           'explanation' => 'Karate practitioners progress through belt colors indicating skill levels.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
