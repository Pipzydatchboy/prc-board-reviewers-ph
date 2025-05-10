<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Which chemical indicator changes color in the presence of ignitable liquid residues?',
        'choices'     => json_encode([
            'Methylene chloride reagent',
            'Ninhydrin spray',
            'Phenolphthalein',
            'Bromophenol blue',
        ]),
        'answer'      => 'Methylene chloride reagent',
        'explanation' => 'Certain reagents react with hydrocarbons to produce color changes indicating accelerants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which term describes a fire pattern that widens at the top and narrows at the bottom on a vertical surface?',
        'choices'     => json_encode([
            'V-pattern',
            'U-pattern',
            'Pour pattern',
            'Arc mapping',
        ]),
        'answer'      => 'V-pattern',
        'explanation' => 'V-patterns form as heat rises and spreads outward along walls from the origin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which piece of evidence must be collected last to avoid contamination of other samples?',
        'choices'     => json_encode([
            'Fabric with potential accelerant',
            'Charred wood',
            'Glass shards',
            'Electrical wiring',
        ]),
        'answer'      => 'Fabric with potential accelerant',
        'explanation' => 'Porous materials absorb vapors; collecting last prevents cross-contamination of volatile residues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which tool is used to measure depth of char in structural members?',
        'choices'     => json_encode([
            'Depth gauge',
            'Moisture meter',
            'Thermal camera',
            'Sound level meter',
        ]),
        'answer'      => 'Depth gauge',
        'explanation' => 'Depth gauges quantify char penetration, helping estimate exposure temperature and fire duration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which pattern indicates fire spread along the ceiling to remote compartments?',
        'choices'     => json_encode([
            'A-pattern',
            'V-pattern',
            'Pour pattern',
            'Alligatoring',
        ]),
        'answer'      => 'A-pattern',
        'explanation' => 'A-patterns point away from the origin along ceilings where fire spread horizontally.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which guideline provides best practices for laboratory sampling of fire debris?',
        'choices'     => json_encode([
            'NFPA 921',
            'NFPA 1',
            'NFPA 13',
            'NFPA 101',
        ]),
        'answer'      => 'NFPA 921',
        'explanation' => 'NFPA 921 outlines methods for proper evidence collection, handling, and documentation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which term refers to the scientific principle of preserving evidence condition over time?',
        'choices'     => json_encode([
            'Evidence integrity',
            'Chain of custody',
            'Scene preservation',
            'Sample fidelity',
        ]),
        'answer'      => 'Chain of custody',
        'explanation' => 'Chain of custody documents who handled evidence to maintain admissibility and integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which indicator suggests a slow smoldering fire rather than open flaming?',
        'choices'     => json_encode([
            'Dark, heavy smoke with minimal charring',
            'Bright orange flames',
            'Alligatoring pattern',
            'Pour patterns',
        ]),
        'answer'      => 'Dark, heavy smoke with minimal charring',
        'explanation' => 'Smoldering fires produce dense smoke and limited flame, preserving patterns longer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which technique is recommended to avoid disturbance of burn patterns when collecting debris?',
        'choices'     => json_encode([
            'Cut around patterns and lift intact',
            'Shovel randomly',
            'Sweep into containers',
            'Drench with water',
        ]),
        'answer'      => 'Cut around patterns and lift intact',
        'explanation' => 'Cutting preserves patterns on edges and prevents damage during collection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which mindset BEST supports objective fire cause determination?',
        'choices'     => json_encode([
            'Scientific skepticism',
            'Assume arson',
            'Trust initial impressions',
            'Follow rumors',
        ]),
        'answer'      => 'Scientific skepticism',
        'explanation' => 'Approaching evidence critically without bias ensures valid conclusions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which sign on electrical equipment suggests overheating contributed to ignition?',
        'choices'     => json_encode([
            'Melted insulation',
            'Alligatoring on wood',
            'Pour patterns',
            'A-patterns',
        ]),
        'answer'      => 'Melted insulation',
        'explanation' => 'Locally melted insulation indicates elevated temperatures at electrical components.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which procedure ensures streamlined lab analysis of debris samples?',
        'choices'     => json_encode([
            'Label, seal, and transport promptly',
            'Leave unsealed',
            'Combine multiple sites',
            'Dry in sun',
        ]),
        'answer'      => 'Label, seal, and transport promptly',
        'explanation' => 'Prompt sealing prevents vapor loss and maintains sample integrity for analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which interview technique elicits detailed accounts from witnesses?',
        'choices'     => json_encode([
            'Open-ended questions',
            'Yes/no questions',
            'Multiple choice',
            'Timed responses',
        ]),
        'answer'      => 'Open-ended questions',
        'explanation' => 'Open-ended questions encourage narrative responses revealing more information.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which pattern indicates fire spread influenced by ventilation openings?',
        'choices'     => json_encode([
            'V-pattern toward opening',
            'Pour pattern',
            'Random char',
            'Arc mapping',
        ]),
        'answer'      => 'V-pattern toward opening',
        'explanation' => 'Heat and smoke flow toward vents, creating V-shaped burn patterns pointing at openings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which legal doctrine allows hearsay evidence under fire investigation?',
        'choices'     => json_encode([
            'Excited utterance exception',
            'Best evidence rule',
            'Fruit of the poisonous tree',
            'Chain of custody',
        ]),
        'answer'      => 'Excited utterance exception',
        'explanation' => 'Statements made under stress of event are exceptions to hearsay prohibition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which device aids in mapping thermal anomalies on scene?',
        'choices'     => json_encode([
            'Thermal imaging camera',
            'Pitot gauge',
            'Depth gauge',
            'Moisture meter',
        ]),
        'answer'      => 'Thermal imaging camera',
        'explanation' => 'Thermal imagers reveal heat residues and hidden hotspots after extinguishment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which sign best indicates air track direction?',
        'choices'     => json_encode([
            'Soot streaks',
            'Arc mapping',
            'A-pattern',
            'Pour patterns',
        ]),
        'answer'      => 'Soot streaks',
        'explanation' => 'Soot accumulation along edges shows airflow movement through the fire scene.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which process identifies chemical composition of accelerant vapors?',
        'choices'     => json_encode([
            'Gas chromatography',
            'Infrared spectroscopy',
            'Mass spectrometry alone',
            'Water titration',
        ]),
        'answer'      => 'Gas chromatography',
        'explanation' => 'GC separates and identifies compounds in vapor samples for accelerant analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which sample container preserves ignitable liquid residues best?',
        'choices'     => json_encode([
            'Sealed metal can',
            'Plastic bag',
            'Paper bag',
            'Glass jar',
        ]),
        'answer'      => 'Sealed metal can',
        'explanation' => 'Metal cans minimize permeation and vapor loss better than plastic or glass.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 2,
        'question'    => 'Which concept ensures an investigator’s conclusions are reproducible?',
        'choices'     => json_encode([
            'Methodological consistency',
            'Subjective interpretation',
            'Guesswork',
            'Selective sampling',
        ]),
        'answer'      => 'Methodological consistency',
        'explanation' => 'Using standardized procedures allows independent verification of results.',
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
