<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart6Seeder extends Seeder
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

       // Part 6: Cultural Heritage & Community Arts

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which Philippine law mandates the preservation of both tangible and intangible cultural heritage?',
           'choices'    => json_encode([
               'National Cultural Heritage Act (RA 10066)',
               'Heritage Zones Act (RA 10192)',
               'Museums Act (RA 8492)',
               'Cultural Development Act (RA 10010)',
           ]),
           'answer'     => 'National Cultural Heritage Act (RA 10066)',
           'explanation'=> 'RA 10066 provides policies for safeguarding the nation’s heritage resources.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What does UNESCO’s World Heritage List primarily recognize?',
           'choices'    => json_encode([
               'Tangible cultural and natural sites',
               'Intangible practices only',
               'Community art projects',
               'Local crafts markets',
           ]),
           'answer'     => 'Tangible cultural and natural sites',
           'explanation'=> 'The World Heritage List includes monuments, buildings, and natural landmarks.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which institution is charged with managing the National Museum of the Philippines?',
           'choices'    => json_encode([
               'National Museum of the Philippines',
               'Cultural Center of the Philippines',
               'National Historical Commission',
               'National Commission for Culture and the Arts',
           ]),
           'answer'     => 'National Museum of the Philippines',
           'explanation'=> 'The National Museum operates under its own charter for heritage conservation.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which documentation method uses audio, video, and written notes to record traditional practices?',
           'choices'    => json_encode([
               'Ethnographic fieldwork',
               'Laboratory research',
               'Survey sampling',
               'Archival research',
           ]),
           'answer'     => 'Ethnographic fieldwork',
           'explanation'=> 'Ethnography captures cultural practices in their natural setting.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What is community-based participatory art?',
           'choices'    => json_encode([
               'Art created collaboratively with community members',
               'Art made by professionals only',
               'Art sold in galleries',
               'Art displayed in museums only',
           ]),
           'answer'     => 'Art created collaboratively with community members',
           'explanation'=> 'Community art involves co-creation and local engagement in the creative process.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What is the primary function of museum curation in education?',
           'choices'    => json_encode([
               'Selecting and interpreting artifacts for learning',
               'Selling museum merchandise',
               'Maintaining building facilities',
               'Hosting social events',
           ]),
           'answer'     => 'Selecting and interpreting artifacts for learning',
           'explanation'=> 'Curation contextualizes objects to facilitate educational experiences.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which project involves students gathering and recording local oral traditions?',
           'choices'    => json_encode([
               'Oral history project',
               'Art exhibition',
               'Theater production',
               'Music recital',
           ]),
           'answer'     => 'Oral history project',
           'explanation'=> 'Oral history enables learners to preserve community memories and narratives.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What is intangible cultural heritage?',
           'choices'    => json_encode([
               'Traditions, performing arts, and social practices',
               'Statues and monuments',
               'Natural parks',
               'Museum collections',
           ]),
           'answer'     => 'Traditions, performing arts, and social practices',
           'explanation'=> 'Intangible heritage includes oral traditions and rituals inscribed by UNESCO.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which field method involves systematic, long-term observation and participation in cultural events?',
           'choices'    => json_encode([
               'Participant observation',
               'Random sampling',
               'Case study',
               'Survey research',
           ]),
           'answer'     => 'Participant observation',
           'explanation'=> 'Participant observation allows researchers to experience and record cultural life.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What term describes temporary exhibitions set up within community spaces?',
           'choices'    => json_encode([
               'Pop-up exhibits',
               'Permanent galleries',
               'Studio showcases',
               'Museum retrospectives',
           ]),
           'answer'     => 'Pop-up exhibits',
           'explanation'=> 'Pop-up exhibits bring art into accessible local venues.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What is heritage mapping used for?',
           'choices'    => json_encode([
               'Identifying and documenting cultural assets',
               'Zoning urban development',
               'Mapping biological species',
               'Designing transport networks',
           ]),
           'answer'     => 'Identifying and documenting cultural assets',
           'explanation'=> 'Heritage mapping highlights sites and practices of cultural significance.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which conservation tool helps track the condition and treatment of artifacts?',
           'choices'    => json_encode([
               'Conservation logbook',
               'Visitor guide',
               'Audio tour',
               'Gift shop catalog',
           ]),
           'answer'     => 'Conservation logbook',
           'explanation'=> 'Logbooks record preservation measures and object histories.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What is a digital archive in cultural heritage work?',
           'choices'    => json_encode([
               'Online repository of cultural materials',
               'Physical storage room',
               'Newspaper archive',
               'Live performance hall',
           ]),
           'answer'     => 'Online repository of cultural materials',
           'explanation'=> 'Digital archives enable broader access and long-term preservation.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which UNESCO program builds capacity for heritage management globally?',
           'choices'    => json_encode([
               'World Heritage Capacity Building',
               'Intangible Heritage Fund',
               'Museum Grants',
               'Arts in Education',
           ]),
           'answer'     => 'World Heritage Capacity Building',
           'explanation'=> 'This program offers training for heritage professionals worldwide.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What term refers to cultural practices still actively maintained by communities?',
           'choices'    => json_encode([
               'Living heritage',
               'Fossilized heritage',
               'Static heritage',
               'Museum heritage',
           ]),
           'answer'     => 'Living heritage',
           'explanation'=> 'Living heritage is practiced and transmitted across generations.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What is the purpose of an intangible heritage register?',
           'choices'    => json_encode([
               'Documenting and safeguarding cultural expressions',
               'Listing museum collections',
               'Cataloging natural resources',
               'Recording architectural plans',
           ]),
           'answer'     => 'Documenting and safeguarding cultural expressions',
           'explanation'=> 'Registers raise awareness and support preservation efforts.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which festival in the Philippines is best known for its indigenous cultural roots and recognized as a National Cultural Treasure?',
           'choices'    => json_encode([
               'Ati-Atihan Festival',
               'Sinulog Festival',
               'Panagbenga Festival',
               'Moriones Festival',
           ]),
           'answer'     => 'Ati-Atihan Festival',
           'explanation'=> 'Ati-Atihan celebrates the origins of the Kalibo people and their heritage.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What is museum pedagogy?',
           'choices'    => json_encode([
               'Using museum resources as educational tools',
               'Acting techniques in drama',
               'Music rehearsal methods',
               'Dance notation systems',
           ]),
           'answer'     => 'Using museum resources as educational tools',
           'explanation'=> 'Museum pedagogy leverages exhibits for teaching and learning.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'Which ethical principle is essential for conducting cultural fieldwork?',
           'choices'    => json_encode([
               'Informed consent',
               'Profit sharing',
               'Publicity rights',
               'Artistic license',
           ]),
           'answer'     => 'Informed consent',
           'explanation'=> 'Researchers must obtain permission before recording or publishing cultural data.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 6,
           'question'   => 'What does cultural sustainability aim to achieve?',
           'choices'    => json_encode([
               'Maintaining cultural practices over time',
               'Maximizing tourism revenue',
               'Replacing old traditions',
               'Isolating cultures from innovation',
           ]),
           'answer'     => 'Maintaining cultural practices over time',
           'explanation'=> 'Cultural sustainability ensures the continuity and vitality of heritage.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
