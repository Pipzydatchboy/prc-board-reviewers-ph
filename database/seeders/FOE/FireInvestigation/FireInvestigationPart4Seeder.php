<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which sample is LEAST appropriate for accelerant detection?',
        'choices'     => json_encode([
            'Wet soil from perimeter',
            'Charred floor material',
            'Glass fragments',
            'Porous cloth swatch',
        ]),
        'answer'      => 'Glass fragments',
        'explanation' => 'Glass is non-porous and does not retain accelerant vapors like other materials.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which pattern suggests fire traveled beneath a dropped ceiling?',
        'choices'     => json_encode([
            'Parallel char lines on ceiling tiles',
            'V-pattern on walls',
            'Inverted V on floor',
            'Pour patterns on carpet',
        ]),
        'answer'      => 'Parallel char lines on ceiling tiles',
        'explanation' => 'Char on the underside of tiles in a line indicates hidden fire spread below.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which tool is used to map high-heat areas on structural steel?',
        'choices'     => json_encode([
            'Infrared thermometer',
            'Moisture meter',
            'Pitot gauge',
            'Depth gauge',
        ]),
        'answer'      => 'Infrared thermometer',
        'explanation' => 'IR thermometers measure surface temperature variations indicating heat exposure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which documentation is MOST critical when transferring debris to lab?',
        'choices'     => json_encode([
            'Chain-of-custody form',
            'Scene sketch',
            'Interview notes',
            'Weather log',
        ]),
        'answer'      => 'Chain-of-custody form',
        'explanation' => 'It legally tracks evidence handling and preserves admissibility in court.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which fire classification does “incendiary” represent?',
        'choices'     => json_encode([
            'Intentional ignition',
            'Natural cause',
            'Accidental cause',
            'Undetermined cause',
        ]),
        'answer'      => 'Intentional ignition',
        'explanation' => 'Incendiary fires are set deliberately with intent to cause damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which pattern indicates fire spread via ceiling joists?',
        'choices'     => json_encode([
            'Straight grab-iron patterns across ceiling',
            'V-patterns on walls',
            'Pour patterns on floor',
            'Alligatoring on wood beams',
        ]),
        'answer'      => 'Straight grab-iron patterns across ceiling',
        'explanation' => 'Char along joists appears as linear grab-iron marks showing heat travel.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which origin location is MOST common in residential structure fires?',
        'choices'     => json_encode([
            'Kitchen',
            'Bathroom',
            'Bedroom closet',
            'Garage',
        ]),
        'answer'      => 'Kitchen',
        'explanation' => 'Cooking activities are the leading cause of home fires, making kitchens the usual origin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which procedure preserves electrical evidence?',
        'choices'     => json_encode([
            'Document and photograph wiring before touching',
            'Remove wiring immediately',
            'Cover with tarp',
            'Sweep away debris',
        ]),
        'answer'      => 'Document and photograph wiring before touching',
        'explanation' => 'Visual records capture condition before any alteration or collection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which test in the lab confirms gasoline residues?',
        'choices'     => json_encode([
            'Gas chromatography-mass spectrometry',
            'Density test',
            'pH test',
            'Moisture content',
        ]),
        'answer'      => 'Gas chromatography-mass spectrometry',
        'explanation' => 'GC-MS accurately identifies and quantifies accelerant compounds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which interview question type should be avoided to prevent bias?',
        'choices'     => json_encode([
            'Leading questions',
            'Open-ended questions',
            'Neutral prompts',
            'Follow-up questions',
        ]),
        'answer'      => 'Leading questions',
        'explanation' => 'They suggest the desired response and can taint witness recall.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which fire growth indicator uses burn depth measurement?',
        'choices'     => json_encode([
            'Char depth gauge reading',
            'Pour pattern extent',
            'V-pattern width',
            'Smoke staining area',
        ]),
        'answer'      => 'Char depth gauge reading',
        'explanation' => 'Depth of char correlates to heat intensity and duration at a location.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which factor MOST hinders origin determination?',
        'choices'     => json_encode([
            'Overhaul disturbance',
            'Clear photographs',
            'Detailed sketches',
            'Multiple witnesses',
        ]),
        'answer'      => 'Overhaul disturbance',
        'explanation' => 'Firefighting operations can destroy or obscure original burn patterns.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which sample container prevents permeation of volatile compounds?',
        'choices'     => json_encode([
            'Metal paint can',
            'Plastic bag',
            'Open paper bag',
            'Glass jar with loose lid',
        ]),
        'answer'      => 'Metal paint can',
        'explanation' => 'Metal cans with airtight lids prevent vapor loss better than plastics or glass.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which guideline addresses ethical investigator conduct?',
        'choices'     => json_encode([
            'NFPA 1033',
            'NFPA 1',
            'NFPA 13',
            'NFPA 72',
        ]),
        'answer'      => 'NFPA 1033',
        'explanation' => 'NFPA 1033 defines professional qualifications and ethical standards for investigators.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which pattern emerges from a smoldering upholstered chair?',
        'choices'     => json_encode([
            'Circular charring at center',
            'V-pattern on adjacent wall',
            'Pour pattern on floor',
            'Alligatoring on wood',
        ]),
        'answer'      => 'Circular charring at center',
        'explanation' => 'Smoldering leads to localized round char where upholstery ignited.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which tool is used to measure airflow direction at a vent?',
        'choices'     => json_encode([
            'Smoke pencil',
            'Moisture meter',
            'Pitot gauge',
            'Depth gauge',
        ]),
        'answer'      => 'Smoke pencil',
        'explanation' => 'Smoke pencils release a visible plume to observe airflow around openings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which evidence is MOST fragile and requires immediate collection?',
        'choices'     => json_encode([
            'Char patterns on wood framing',
            'Metal fragments',
            'Concrete debris',
            'Brick',
        ]),
        'answer'      => 'Char patterns on wood framing',
        'explanation' => 'Wood char is easily altered; photographing and sampling is urgent before loss.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which stringency applies to lab reports for court admissibility?',
        'choices'     => json_encode([
            'Accredited laboratory analysis',
            'In-house field tests',
            'Anecdotal observations',
            'Unverified rapid tests',
        ]),
        'answer'      => 'Accredited laboratory analysis',
        'explanation' => 'Courts favor results from accredited labs following standardized methods.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which indicator on electrical appliance suggests overload ignition?',
        'choices'     => json_encode([
            'Bulging and melted plastic housing',
            'Alligatoring on wood',
            'Pour patterns on floor',
            'V-patterns on walls',
        ]),
        'answer'      => 'Bulging and melted plastic housing',
        'explanation' => 'Overloaded appliances show deformed casings and melted components at the origin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 4,
        'question'    => 'Which practice ensures unbiased interpretation of fire patterns?',
        'choices'     => json_encode([
            'Blind analysis before scene context',
            'Reviewing witness statements first',
            'Assuming electrical cause',
            'Focusing on only one pattern',
        ]),
        'answer'      => 'Blind analysis before scene context',
        'explanation' => 'Analyzing patterns without preconceived scene details prevents confirmation bias.',
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
