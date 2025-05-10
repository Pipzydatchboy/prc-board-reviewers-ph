<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart6Seeder extends Seeder
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
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which method helps prevent fire spread in laboratory fume hoods?',
        'choices'     => json_encode([
            'Maintain sash at proper height',
            'Store chemicals on hood floor',
            'Use open flame inside hood',
            'Block airflow vents',
        ]),
        'answer'      => 'Maintain sash at proper height',
        'explanation' => 'Keeping the sash at recommended level ensures containment of vapors and reduces ignition risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'What is the REQUIRED minimum clearance around sprinkler system risers?',
        'choices'     => json_encode([
            '36 inches',
            '12 inches',
            '6 inches',
            '24 inches',
        ]),
        'answer'      => '36 inches',
        'explanation' => 'A 36″ clear working space must be maintained for access to sprinkler risers and valves per NFPA 25.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which control prevents unauthorized alteration of fire alarm panels?',
        'choices'     => json_encode([
            'Lockable cabinet',
            'Magnetic hold-open',
            'Smoke detector shield',
            'Flow switch',
        ]),
        'answer'      => 'Lockable cabinet',
        'explanation' => 'Fire alarm panels are secured in lockable enclosures to prevent tampering.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which activity is PART of a fire safety audit?',
        'choices'     => json_encode([
            'Review of evacuation drill records',
            'Pump test certification',
            'Hood suppression recharge',
            'Incident response timing',
        ]),
        'answer'      => 'Review of evacuation drill records',
        'explanation' => 'Audits assess documentation including drill performance to ensure readiness and compliance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which fire safety measure is MOST important for electrical switchgear rooms?',
        'choices'     => json_encode([
            'Keep doors closed and latched',
            'Install carpet',
            'Store combustibles nearby',
            'Disable detectors',
        ]),
        'answer'      => 'Keep doors closed and latched',
        'explanation' => 'Maintaining closed, latched doors limits smoke spread and heat entry into adjacent areas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'What is the REQUIRED spacing for fire department connections (FDCs)?',
        'choices'     => json_encode([
            'Within 100 feet of a fire hydrant',
            'Adjacent to exit doors',
            'Inside mechanical rooms',
            'Near electrical panels',
        ]),
        'answer'      => 'Within 100 feet of a fire hydrant',
        'explanation' => 'FDCs must be located within 100′ of a hydrant for effective pump operations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which fire prevention requirement applies to waste handling rooms?',
        'choices'     => json_encode([
            'Automatic sprinkler protection',
            'Heat detectors only',
            'Open shelving',
            'Paper bins',
        ]),
        'answer'      => 'Automatic sprinkler protection',
        'explanation' => 'Sprinklers are required to control fire in areas storing combustible refuse per fire code.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which inspection ensures proper operation of clean agent suppression systems?',
        'choices'     => json_encode([
            'Agent quantity verification',
            'Flow test',
            'Hydrostatic test',
            'Pump churn test',
        ]),
        'answer'      => 'Agent quantity verification',
        'explanation' => 'Clean agent cylinders are weighed or measured annually to confirm required concentration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which device warns of sprinkler waterflow during annual testing?',
        'choices'     => json_encode([
            'Flow switch bell',
            'Smoke detector',
            'Pressure gauge',
            'Tamper switch',
        ]),
        'answer'      => 'Flow switch bell',
        'explanation' => 'Flow switch activation rings a bell or sends signal to indicate water movement in system piping.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which action should be taken when exit signs fail monthly illumination test?',
        'choices'     => json_encode([
            'Repair or replace immediately',
            'Schedule next annual test',
            'Document and ignore',
            'Cover the sign',
        ]),
        'answer'      => 'Repair or replace immediately',
        'explanation' => 'Non-functional exit signs must be fixed promptly to maintain egress visibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'What is the REQUIRED test interval for emergency voice communication systems?',
        'choices'     => json_encode([
            'Monthly',
            'Annually',
            'Weekly',
            'Quarterly',
        ]),
        'answer'      => 'Monthly',
        'explanation' => 'NFPA 72 mandates monthly testing of emergency communication systems for functionality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which preventive measure reduces false activations of heat detectors?',
        'choices'     => json_encode([
            'Use of rate-of-rise detectors',
            'Cover detectors during cooking',
            'Disable system',
            'Install extra heads',
        ]),
        'answer'      => 'Use of rate-of-rise detectors',
        'explanation' => 'Rate-of-rise types respond to rapid temperature changes, reducing nuisance activations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which record-keeping requirement applies to sprinkler system modifications?',
        'choices'     => json_encode([
            'Update as-built drawings',
            'Store original plans only',
            'Discard old records',
            'No documentation needed',
        ]),
        'answer'      => 'Update as-built drawings',
        'explanation' => 'Modifications must be reflected in system drawings to guide future inspections and maintenance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which fire safety device is inspected during roof-level surveys?',
        'choices'     => json_encode([
            'Smoke vents',
            'Smoke detectors',
            'Fire doors',
            'Extinguishers',
        ]),
        'answer'      => 'Smoke vents',
        'explanation' => 'Roof inspections include checking manual and automatic vents for functionality and obstruction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which clearance is REQUIRED around fire pump engine air intakes?',
        'choices'     => json_encode([
            '3 feet',
            '1 foot',
            '6 inches',
            'No clearance',
        ]),
        'answer'      => '3 feet',
        'explanation' => 'Space around intakes prevents obstruction and ensures adequate combustion air for pump engines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which sign is REQUIRED at fire sprinkler control valves?',
        'choices'     => json_encode([
            '“Sprinkler Control Valve”',
            '“Fire Door Keep Closed”',
            '“Emergency Exit”',
            '“No Smoking”',
        ]),
        'answer'      => '“Sprinkler Control Valve”',
        'explanation' => 'Control valves must be clearly labeled to ensure correct operation during emergencies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which system component is tested during annual clean agent system leak tests?',
        'choices'     => json_encode([
            'Cylinder pressure',
            'Smoke detector sensitivity',
            'Alarm bells',
            'Hose friction loss',
        ]),
        'answer'      => 'Cylinder pressure',
        'explanation' => 'Cylinder pressures are monitored to detect leaks and ensure required agent quantity remains.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which preventive action reduces chimney fire risk in wood stoves?',
        'choices'     => json_encode([
            'Regular chimney sweeping',
            'Use of treated wood',
            'Leaving damper open',
            'Storing combustibles nearby',
        ]),
        'answer'      => 'Regular chimney sweeping',
        'explanation' => 'Sweeping removes creosote buildup, drastically reducing chimney ignition risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which preventive measure addresses fire risk from overloaded electrical outlets?',
        'choices'     => json_encode([
            'Limit use to one appliance per outlet',
            'Use multiple power strips',
            'Cover outlets with tape',
            'Plug extension cords end-to-end',
        ]),
        'answer'      => 'Limit use to one appliance per outlet',
        'explanation' => 'Avoiding multiple high-draw devices on a single receptacle prevents overheating and ignition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 6,
        'question'    => 'Which record must include the next scheduled inspection date?',
        'choices'     => json_encode([
            'Inspection report',
            'Fire drill record',
            'Incident report',
            'Training log',
        ]),
        'answer'      => 'Inspection report',
        'explanation' => 'Reports document current findings and specify the due date for the next required inspection.',
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
