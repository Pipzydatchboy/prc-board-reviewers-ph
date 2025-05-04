<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart3Seeder extends Seeder
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

       // Part 3: Music Education

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'In 4/4 time, how many beats does a half note receive?',
           'choices'    => json_encode([
               '2',
               '1',
               '3',
               '4',
           ]),
           'answer'     => '2',
           'explanation'=> 'A half note equals two beats in common (4/4) time.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'In movable Do solfège, which syllable represents the fifth scale degree?',
           'choices'    => json_encode([
               'So',
               'Mi',
               'La',
               'Fa',
           ]),
           'answer'     => 'So',
           'explanation'=> 'The fifth degree is sung as "So" in movable Do.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'A key signature with one sharp indicates which major key?',
           'choices'    => json_encode([
               'G major',
               'D major',
               'A major',
               'F major',
           ]),
           'answer'     => 'G major',
           'explanation'=> 'G major has one sharp (F#) in its key signature.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'What dynamic marking indicates very soft playing?',
           'choices'    => json_encode([
               'pp',
               'ff',
               'mf',
               'mp',
           ]),
           'answer'     => 'pp',
           'explanation'=> 'Pianissimo (pp) instructs performers to play very softly.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'The rondalla ensemble primarily features which instrument family?',
           'choices'    => json_encode([
               'Strings',
               'Brass',
               'Woodwinds',
               'Percussion',
           ]),
           'answer'     => 'Strings',
           'explanation'=> 'Rondalla uses plucked string instruments like bandurria and guitar.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'The kulintang ensemble originates from which region of the Philippines?',
           'choices'    => json_encode([
               'Mindanao',
               'Ilocos',
               'Visayas',
               'Bicol',
           ]),
           'answer'     => 'Mindanao',
           'explanation'=> 'Kulintang, a gong-chime ensemble, is traditional to Muslim Mindanao.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'Which form characterizes the traditional Filipino song genre kundiman?',
           'choices'    => json_encode([
               'Strophic form',
               'Through-composed',
               'Rondo',
               'Binary form',
           ]),
           'answer'     => 'Strophic form',
           'explanation'=> 'Kundiman songs repeat the same music for each stanza.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'The harana is traditionally performed at which time?',
           'choices'    => json_encode([
               'Night',
               'Morning',
               'Afternoon',
               'Dawn',
           ]),
           'answer'     => 'Night',
           'explanation'=> 'Harana is a serenade performed by suitors at night.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'Which bamboo xylophone is traditional to the Palawan region?',
           'choices'    => json_encode([
               'Gabbang',
               'Angklung',
               'Kulintang',
               'Gandingan',
           ]),
           'answer'     => 'Gabbang',
           'explanation'=> 'Gabbang is a wooden xylophone used by Palawan tribes.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'Which instrument family does the clarinet belong to?',
           'choices'    => json_encode([
               'Woodwind',
               'Brass',
               'String',
               'Percussion',
           ]),
           'answer'     => 'Woodwind',
           'explanation'=> 'Clarinets produce sound via a vibrating reed.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'Which ensemble notation abbreviation stands for Soprano, Alto, Tenor, Bass?',
           'choices'    => json_encode([
               'SATB',
               'SSAA',
               'TTBB',
               'ABCD',
           ]),
           'answer'     => 'SATB',
           'explanation'=> 'SATB is the standard four-part choral arrangement.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'What is the term for two or more melodies played simultaneously?',
           'choices'    => json_encode([
               'Counterpoint',
               'Unison',
               'Homophony',
               'Monophony',
           ]),
           'answer'     => 'Counterpoint',
           'explanation'=> 'Counterpoint refers to interdependent melodic lines.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'In ensemble rehearsals, what is the primary purpose of a warm-up?',
           'choices'    => json_encode([
               'Prepare voices or instruments',
               'Record attendance',
               'Evaluate performance',
               'Select repertoire',
           ]),
           'answer'     => 'Prepare voices or instruments',
           'explanation'=> 'Warm-ups ready performers physically and mentally for rehearsal.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'What notation indicates the speed at which a piece should be played?',
           'choices'    => json_encode([
               'Tempo marking',
               'Dynamics',
               'Articulation',
               'Meter',
           ]),
           'answer'     => 'Tempo marking',
           'explanation'=> 'Tempo markings like Allegro direct the pace of music.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'What common symbol denotes common time signature in music?',
           'choices'    => json_encode([
               'C',
               '¢',
               '4/4',
               'Ω',
           ]),
           'answer'     => 'C',
           'explanation'=> 'The letter C represents 4/4 time, called common time.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'Which percussion instrument produces sound without definite pitch?',
           'choices'    => json_encode([
               'Snare drum',
               'Xylophone',
               'Glockenspiel',
               'Timpani',
           ]),
           'answer'     => 'Snare drum',
           'explanation'=> 'Snare drums are unpitched and provide rhythmic effects.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'What is a fermata in musical notation?',
           'choices'    => json_encode([
               'Pause or hold',
               'Play staccato',
               'Increase volume',
               'Repeat section',
           ]),
           'answer'     => 'Pause or hold',
           'explanation'=> 'A fermata indicates a note or rest should be prolonged.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'Which string instrument is standard in a Western orchestra\'s violin section?',
           'choices'    => json_encode([
               'Violin',
               'Cello',
               'Double bass',
               'Viola',
           ]),
           'answer'     => 'Violin',
           'explanation'=> 'The violin is the highest-pitched string instrument in orchestral string sections.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'Which teaching method emphasizes student exploration and discovery in music learning?',
           'choices'    => json_encode([
               'Audiation-based learning',
               'Direct instruction',
               'Lecture-only',
               'Drill and practice',
           ]),
           'answer'     => 'Audiation-based learning',
           'explanation'=> 'Audiation engages students in internal hearing of music for deeper understanding.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 3,
           'question'   => 'What component of a rehearsal plan specifies the goal for each segment?',
           'choices'    => json_encode([
               'Learning objectives',
               'Warm-up activities',
               'Equipment list',
               'Break schedule',
           ]),
           'answer'     => 'Learning objectives',
           'explanation'=> 'Objectives guide focus and measure rehearsal outcomes.',
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
