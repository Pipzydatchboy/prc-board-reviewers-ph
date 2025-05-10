<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

$batch = [
    //1
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'What is the FIRST action an investigator should take upon arrival at a fire scene?',
        'choices'     => json_encode([
            'Ensure scene safety',
            'Interview witnesses',
            'Collect evidence',
            'Photograph fire patterns',
        ]),
        'answer'      => 'Ensure scene safety',
        'explanation' => 'Securing the scene and ensuring no hazards protect both personnel and evidence integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which pattern is most indicative of a liquid accelerant use?',
        'choices'     => json_encode([
            'Pour pattern',
            'V-pattern',
            'Uphill char',
            'Alligatoring',
        ]),
        'answer'      => 'Pour pattern',
        'explanation' => 'Random irregular burn patterns on floors suggest liquid accelerant was poured.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which tool is BEST for detecting trace accelerant residues?',
        'choices'     => json_encode([
            'Portable hydrocarbon detector',
            'Thermal imager',
            'Moisture meter',
            'Sound level meter',
        ]),
        'answer'      => 'Portable hydrocarbon detector',
        'explanation' => 'These devices detect volatile hydrocarbon vapors at fire scenes indicating accelerant presence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'What is the primary benefit of photographing the scene before evidence collection?',
        'choices'     => json_encode([
            'Record original conditions',
            'Distract bystanders',
            'Test camera equipment',
            'Burn extinguishment',
        ]),
        'answer'      => 'Record original conditions',
        'explanation' => 'Photographs preserve scene layout and evidence placement before anything is disturbed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which indicator suggests electrical origin in a fire?',
        'choices'     => json_encode([
            'Arc mapping on conductors',
            'Alligatoring on wood',
            'Pour pattern on floor',
            'V-pattern at ceiling',
        ]),
        'answer'      => 'Arc mapping on conductors',
        'explanation' => 'Arcing evidence on wiring indicates overheating or failure at electrical components.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which sequence correctly reflects documentation steps?',
        'choices'     => json_encode([
            'Photograph → sketch → notes',
            'Notes → photograph → sketch',
            'Sketch → photograph → notes',
            'Sketch → notes → photograph',
        ]),
        'answer'      => 'Photograph → sketch → notes',
        'explanation' => 'Photograph first, then detailed sketches, and finally written notes for clarity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'What is the primary purpose of a fire scene sketch?',
        'choices'     => json_encode([
            'Depict spatial relationships',
            'Replace photographs',
            'Test drawing skills',
            'Record interviews',
        ]),
        'answer'      => 'Depict spatial relationships',
        'explanation' => 'Sketches show distances, orientations, and relationships not always clear in photos.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which sample type is preferred for laboratory accelerant analysis?',
        'choices'     => json_encode([
            'Charred material in sealed can',
            'Wet ash',
            'Loose debris',
            'Metal fragments',
        ]),
        'answer'      => 'Charred material in sealed can',
        'explanation' => 'Porous charred materials absorb accelerants; sealed cans prevent vapor loss.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which interview type is MOST spontaneous and open-ended?',
        'choices'     => json_encode([
            'Free narrative',
            'Closed questions',
            'Yes/no questionnaire',
            'Multiple choice',
        ]),
        'answer'      => 'Free narrative',
        'explanation' => 'Free narrative lets witnesses describe events in their own words without prompts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'What is the significance of a “heat shadow” on fire debris?',
        'choices'     => json_encode([
            'Protected area cooler region',
            'Accelerant presence',
            'Alligatoring',
            'Electrical fault',
        ]),
        'answer'      => 'Protected area cooler region',
        'explanation' => 'Heat shadows occur behind objects shielding areas from direct flame contact.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which documentation records chain-of-custody for evidence?',
        'choices'     => json_encode([
            'Evidence log',
            'Sketch',
            'Weather report',
            'Incident report',
        ]),
        'answer'      => 'Evidence log',
        'explanation' => 'An evidence log tracks transfer, location, and handling to preserve legal admissibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which sign indicates fire spread from floor to ceiling first?',
        'choices'     => json_encode([
            'Inverted V-pattern',
            'Pour pattern',
            'Alligatoring',
            'Arc mapping',
        ]),
        'answer'      => 'Inverted V-pattern',
        'explanation' => 'Inverted V burn patterns on walls indicate upward fire progression from origin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which method preserves fragile fire patterns when collecting debris?',
        'choices'     => json_encode([
            'Use rigid containers and minimal handling',
            'Shovel into plastic bags',
            'Drench with water',
            'Sweep into box',
        ]),
        'answer'      => 'Use rigid containers and minimal handling',
        'explanation' => 'Rigid cans protect char patterns; excessive handling can destroy key evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which literature defines legal standards for expert testimony?',
        'choices'     => json_encode([
            'Frye vs. United States',
            'NFPA 1',
            'NFPA 921',
            'NFPA 13',
        ]),
        'answer'      => 'Frye vs. United States',
        'explanation' => 'The Frye standard governs admissibility of scientific testimony in many jurisdictions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'What is the purpose of the NFPA 921 guide?',
        'choices'     => json_encode([
            'Establish systematic fire investigation methodology',
            'Set building codes',
            'Define firefighting tactics',
            'Regulate fire departments',
        ]),
        'answer'      => 'Establish systematic fire investigation methodology',
        'explanation' => 'NFPA 921 provides science-based guidelines for consistent, logical fire investigations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which factor MOST complicates origin determination in smoldering fires?',
        'choices'     => json_encode([
            'Low heat release obscuring patterns',
            'V-pattern',
            'Arc mapping',
            'Alligatoring',
        ]),
        'answer'      => 'Low heat release obscuring patterns',
        'explanation' => 'Smoldering burns may not produce clear char patterns, making origin harder to locate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which test is used to confirm presence of ignitable liquids?',
        'choices'     => json_encode([
            'Gas chromatography–mass spectrometry (GC-MS)',
            'Thermogravimetric analysis',
            'pH testing',
            'Combustion calorimetry',
        ]),
        'answer'      => 'Gas chromatography–mass spectrometry (GC-MS)',
        'explanation' => 'GC-MS identifies and quantifies accelerant chemicals from collected samples.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which documentation records ambient weather conditions?',
        'choices'     => json_encode([
            'Weather log',
            'Evidence log',
            'Sketch',
            'Fire report',
        ]),
        'answer'      => 'Weather log',
        'explanation' => 'Weather conditions can affect fire behavior and evidence preservation; they are logged on scene.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'Which indicator suggests natural versus incendiary fire cause?',
        'choices'     => json_encode([
            'Single point of origin',
            'Multiple pour patterns',
            'Accelerant odor',
            'Alligatoring',
        ]),
        'answer'      => 'Single point of origin',
        'explanation' => 'Accidental fires often start at a single point without accelerant evidence at multiple locations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 1,
        'question'    => 'What is the investigator’s BEST practice when interviewing a suspect?',
        'choices'     => json_encode([
            'Record interview and advise of rights',
            'Conduct without recording',
            'Imply guilt',
            'Interview only once',
        ]),
        'answer'      => 'Record interview and advise of rights',
        'explanation' => 'Recording ensures accuracy; advising of rights protects legal admissibility of statements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
