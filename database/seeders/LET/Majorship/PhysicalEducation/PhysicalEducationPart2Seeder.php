<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart2Seeder extends Seeder
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

       // Part 2: Gymnastics & Dance (Philippine folk & international forms)

       //1
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which grip is commonly used on the parallel bars in men’s gymnastics?',
           'choices'     => json_encode([
               'False grip',
               'Hook grip',
               'Underhand grip',
               'Overhand grip',
           ]),
           'answer'      => 'False grip',
           'explanation' => 'The false grip allows gymnasts to maintain wrist position for swinging elements.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'In artistic gymnastics, what is a “cartwheel”?',
           'choices'     => json_encode([
               'A lateral rotation of the body on hands and feet',
               'A backward flip',
               'A forward somersault',
               'A spin on one foot',
           ]),
           'answer'      => 'A lateral rotation of the body on hands and feet',
           'explanation' => 'The cartwheel is a sideways rotary movement where hands and feet alternate contact.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which Philippine folk dance originates from the Batangas region?',
           'choices'     => json_encode([
               'Tinikling',
               'Cariñosa',
               'Itik-Itik',
               'Subli',
           ]),
           'answer'      => 'Subli',
           'explanation' => 'Subli is a religious folk dance from Batangas performed in honor of the Holy Cross.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'What is “tinikling” characterized by?',
           'choices'     => json_encode([
               'Dancers stepping between clashing bamboo poles',
               'Circular movement with fans',
               'Hand clapping rhythm',
               'Foot tapping only',
           ]),
           'answer'      => 'Dancers stepping between clashing bamboo poles',
           'explanation' => 'Tinikling mimics the movements of tikling birds, with dancers avoiding pole strikes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which movement is a fundamental element of modern dance pioneered by Martha Graham?',
           'choices'     => json_encode([
               'Contraction and release',
               'Pirouette',
               'Plie',
               'Battement',
           ]),
           'answer'      => 'Contraction and release',
           'explanation' => 'Graham technique uses contraction and release to express emotion through the core.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'In rhythmic gymnastics, which apparatus uses ribbons?',
           'choices'     => json_encode([
               'Ribbon',
               'Ball',
               'Hoop',
               'Clubs',
           ]),
           'answer'      => 'Ribbon',
           'explanation' => 'The ribbon apparatus requires large, flowing movements to manipulate a long ribbon.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which dance form is known for its precise footwork and rapid heel-and-toe movements?',
           'choices'     => json_encode([
               'Tap dance',
               'Ballet',
               'Jazz',
               'Contemporary',
           ]),
           'answer'      => 'Tap dance',
           'explanation' => 'Tap dance uses metal-soled shoes to create rhythmic patterns with the feet.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which Philippine dance imitates the movement of ducks?',
           'choices'     => json_encode([
               'Itik-Itik',
               'Maglalatik',
               'Pandanggo sa Ilaw',
               'Cariñosa',
           ]),
           'answer'      => 'Itik-Itik',
           'explanation' => 'Itik-Itik features flowing arm and toe movements resembling duck behavior.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which ballet position involves arms rounded in front forming an oval?',
           'choices'     => json_encode([
               'First position',
               'Second position',
               'Third position',
               'Fifth position',
           ]),
           'answer'      => 'First position',
           'explanation' => 'In first position, arms form a soft oval at the front of the body.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'What is “pirouette” in dance?',
           'choices'     => json_encode([
               'A spin on one foot',
               'A sliding step',
               'A jump',
               'A leap forward',
           ]),
           'answer'      => 'A spin on one foot',
           'explanation' => 'Pirouette is a controlled turn executed on one leg with the other in passe.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which Philippine dance is performed with oil lamps balanced on the head and hands?',
           'choices'     => json_encode([
               'Pandanggo sa Ilaw',
               'Singkil',
               'Maglalatik',
               'Carinosa',
           ]),
           'answer'      => 'Pandanggo sa Ilaw',
           'explanation' => 'Pandanggo sa Ilaw showcases graceful movements while balancing lit cans of oil.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'What is “en pointe” in ballet?',
           'choices'     => json_encode([
               'Dancing on the tips of the toes',
               'A jump with bent knees',
               'A turn in the air',
               'A sliding step',
           ]),
           'answer'      => 'Dancing on the tips of the toes',
           'explanation' => 'Pointe technique enables dancers to balance on specialized shoes at the toe box.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which folk dance is known for the mock battle between Moros and Christians?',
           'choices'     => json_encode([
               'Singkil',
               'Tinikling',
               'Binasuan',
               'Kuratsa',
           ]),
           'answer'      => 'Singkil',
           'explanation' => 'Singkil dramatizes the epic legend of Prince Bantugan with fan and step movements.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'What is “arabesque” in ballet?',
           'choices'     => json_encode([
               'A position with one leg extended behind',
               'A jumping split',
               'A forward bend',
               'A side leap',
           ]),
           'answer'      => 'A position with one leg extended behind',
           'explanation' => 'Arabesque requires the dancer to stand on one leg and extend the other behind the body.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which dance form originates from the Andalusian region of Spain and features rhythmic footwork and hand clapping?',
           'choices'     => json_encode([
               'Flamenco',
               'Salsa',
               'Tango',
               'Hip hop',
           ]),
           'answer'      => 'Flamenco',
           'explanation' => 'Flamenco combines guitar, singing, and percussive dance from Andalusia.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which apparatus is not used in rhythmic gymnastics?',
           'choices'     => json_encode([
               'Vault',
               'Ball',
               'Ribbon',
               'Rope',
           ]),
           'answer'      => 'Vault',
           'explanation' => 'Vault is an artistic gymnastics event, not part of rhythmic gymnastics. ',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which Philippine dance originated in the Visayas and incorporates coconut shell clappers?',
           'choices'     => json_encode([
               'Binasuan',
               'Itik-Itik',
               'Pandanggo sa Ilaw',
               'Cariñosa',
           ]),
           'answer'      => 'Binasuan',
           'explanation' => 'Binasuan dancers balance full glasses of rice wine while clapping coconut shells.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'What is the key characteristic of modern dance?',
           'choices'     => json_encode([
               'Emphasis on natural, expressive movement',
               'Strict formality and codified positions',
               'Use of pointe shoes',
               'Rigid structure and symmetry',
           ]),
           'answer'      => 'Emphasis on natural, expressive movement',
           'explanation' => 'Modern dance breaks classical rules to explore organic movement and emotion.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which ballet movement involves a leap where one leg leads and the other follows?',
           'choices'     => json_encode([
               'Grande jeté',
               'Plié',
               'Relevé',
               'Tendu',
           ]),
           'answer'      => 'Grande jeté',
           'explanation' => 'In a grand jeté, dancers perform a large split leap through the air.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 2,
           'question'    => 'Which folk dance from Ilocos uses small bamboo castanets attached to dancers’ ankles?',
           'choices'     => json_encode([
               'Maglalatik',
               'Kuratsa',
               'Tinikling',
               'Singkil',
           ]),
           'answer'      => 'Maglalatik',
           'explanation' => 'Maglalatik features coconut shell halves played on the body, not castanets; this is a trick—actual castanets appear in Spanish dances.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
