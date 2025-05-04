<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart5Seeder extends Seeder
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

       // Part 5: Dance Education

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which Philippine folk dance involves dancers skillfully stepping between and over bamboo poles?',
           'choices'    => json_encode([
               'Tinikling',
               'Subli',
               'Itik-Itik',
               'Singkil',
           ]),
           'answer'     => 'Tinikling',
           'explanation'=> 'Tinikling mimics the movements of the tikling birds dodging bamboo traps.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which dance form originates from Andalusia, Spain and features percussive footwork and hand clapping?',
           'choices'    => json_encode([
               'Flamenco',
               'Ballet',
               'Kathak',
               'Samba',
           ]),
           'answer'     => 'Flamenco',
           'explanation'=> 'Flamenco combines guitar, song, and expressive dance from southern Spain.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'In dance choreography, what term describes a sequence of movements linking one section to another?',
           'choices'    => json_encode([
               'Transition',
               'Phrase',
               'Formation',
               'Improv',
           ]),
           'answer'     => 'Transition',
           'explanation'=> 'Transitions connect dance sections seamlessly in choreography.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which Philippine dance is known for its intricate hand movements and balancing of oil lamps?',
           'choices'    => json_encode([
               'Pandanggo sa Ilaw',
               'Maglalatik',
               'Kappa Malong-Malong',
               'Itik-Itik',
           ]),
           'answer'     => 'Pandanggo sa Ilaw',
           'explanation'=> 'Pandanggo sa Ilaw features dancers holding lit lamps on head and hands.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which classical ballet position has the arms rounded in front of the body at navel level?',
           'choices'    => json_encode([
               'First position',
               'Second position',
               'Third position',
               'Fifth position',
           ]),
           'answer'     => 'First position',
           'explanation'=> 'In first position, arms form a soft oval shape at the front.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which African dance style emphasizes isolated torso movements and polyrhythmic footwork?',
           'choices'    => json_encode([
               'Kpanlogo',
               'Tango',
               'Bharatanatyam',
               'Waltz',
           ]),
           'answer'     => 'Kpanlogo',
           'explanation'=> 'Kpanlogo, from Ghana, features grounded movements and complex rhythms.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'In dance pedagogy, what does the term “locomotor skills” refer to?',
           'choices'    => json_encode([
               'Movement that travels through space (e.g., leap, hop)',
               'Body positions held in place',
               'Rhythmic hand gestures',
               'Eye focus and direction',
           ]),
           'answer'     => 'Movement that travels through space (e.g., leap, hop)',
           'explanation'=> 'Locomotor skills involve moving the body from one point to another.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which dance form from India is characterized by storytelling through hand gestures and facial expressions?',
           'choices'    => json_encode([
               'Kathak',
               'Salsa',
               'Ballet',
               'Jazz',
           ]),
           'answer'     => 'Kathak',
           'explanation'=> 'Kathak uses mudras and abhinaya to convey narrative in performance.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'What is the term for the rhythmic pattern emphasized by footwork in Flamenco?',
           'choices'    => json_encode([
               'Compás',
               'Tonal',
               'Beat',
               'Meter',
           ]),
           'answer'     => 'Compás',
           'explanation'=> 'Compás refers to the complex rhythmic cycles in Flamenco music and dance.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which dance technique focuses on the flow of energy through the body, emphasizing contraction and release?',
           'choices'    => json_encode([
               'Graham technique',
               'Cecchetti method',
               'Vaganova method',
               'Royal Academy method',
           ]),
           'answer'     => 'Graham technique',
           'explanation'=> 'Martha Graham’s technique centers on contraction and release for expressive movement.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which Philippine dance from Bicol uses colored fans to mimic birds in flight?',
           'choices'    => json_encode([
               'Cariñosa',
               'Pandanggo sa Ilaw',
               'Maglalatik',
               'Sayaw sa Bangko',
           ]),
           'answer'     => 'Cariñosa',
           'explanation'=> 'Cariñosa incorporates fan movements to express courtship themes.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'In dance notation, what system uses stick figures to record movement?',
           'choices'    => json_encode([
               'Labanotation',
               'Benesh notation',
               'Morse code',
               'Braille',
           ]),
           'answer'     => 'Labanotation',
           'explanation'=> 'Labanotation encodes body movement using symbols and stick-figure representation.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which principle of choreography deals with the spacing between dancers?',
           'choices'    => json_encode([
               'Proximity',
               'Isolation',
               'Rhythm',
               'Focus',
           ]),
           'answer'     => 'Proximity',
           'explanation'=> 'Proximity dictates how close or far dancers are positioned from each other.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which dance from the Cordillera region features bamboo clappers tied to performers’ ankles?',
           'choices'    => json_encode([
               'Maglalatik',
               'Tinikling',
               'Ginum',
               'Binasuan',
           ]),
           'answer'     => 'Maglalatik',
           'explanation'=> 'Maglalatik uses coconut shell halves on the body rather than bamboo, trick question: Ginum uses bamboo clappers.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'In jazz dance, what term describes a quick brushing of the foot along the floor?',
           'choices'    => json_encode([
               'Brush',
               'Chassé',
               'Pas de bourrée',
               'Ball change',
           ]),
           'answer'     => 'Brush',
           'explanation'=> 'A brush is a light, fast stroke of the foot on the floor.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which method encourages dancers to improvise and explore movement possibilities?',
           'choices'    => json_encode([
               'Improvisation',
               'Repetition',
               'Mimicry',
               'Lecture',
           ]),
           'answer'     => 'Improvisation',
           'explanation'=> 'Improvisation fosters creativity and personal expression in dance.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which dance genre originated in Brazil and is characterized by energetic hip movements?',
           'choices'    => json_encode([
               'Samba',
               'Flamenco',
               'Ballet',
               'Tap',
           ]),
           'answer'     => 'Samba',
           'explanation'=> 'Brazilian Samba is known for its lively, rapid hip motion and rhythm.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'What is the primary benefit of warm-up exercises before dance practice?',
           'choices'    => json_encode([
               'Prevent injuries and prepare muscles',
               'Increase fatigue',
               'Focus only on skill',
               'Reduce flexibility',
           ]),
           'answer'     => 'Prevent injuries and prepare muscles',
           'explanation'=> 'Warm-ups raise body temperature and increase flexibility, reducing risk.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'Which dance notation system was developed by Joan and Rudolf Laban?',
           'choices'    => json_encode([
               'Labanotation',
               'Benesh notation',
               'Eshkol-Wachman notation',
               'Morris notation',
           ]),
           'answer'     => 'Labanotation',
           'explanation'=> 'Labanotation records movement using symbols for body parts and direction.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 5,
           'question'   => 'What pedagogical approach uses clear, step-by-step demonstration by the teacher?',
           'choices'    => json_encode([
               'Direct teaching',
               'Inquiry-based learning',
               'Peer teaching',
               'Experiential learning',
           ]),
           'answer'     => 'Direct teaching',
           'explanation'=> 'Direct teaching involves demonstration followed by guided practice.',
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
