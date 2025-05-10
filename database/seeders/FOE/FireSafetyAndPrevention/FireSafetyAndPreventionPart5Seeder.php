<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which NFPA standard governs the installation and maintenance of fire doors?',
        'choices'     => json_encode([
            'NFPA 80',
            'NFPA 101',
            'NFPA 72',
            'NFPA 1',
        ]),
        'answer'      => 'NFPA 80',
        'explanation' => 'NFPA 80, Standard for Fire Doors and Other Opening Protectives, covers fire door assembly requirements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'What is the REQUIRED minimum service test interval for portable fire extinguishers?',
        'choices'     => json_encode([
            'Annual',
            'Monthly',
            'Quarterly',
            'Biennial',
        ]),
        'answer'      => 'Annual',
        'explanation' => 'NFPA 10 requires a maintenance service test at least once every 12 months.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'During a fire drill, which action must occur?',
        'choices'     => json_encode([
            'Evacuation via primary and secondary routes',
            'Activation of all sprinkler heads',
            'Deployment of master streams',
            'Full building overhaul',
        ]),
        'answer'      => 'Evacuation via primary and secondary routes',
        'explanation' => 'Drills must practice egress along designated primary and alternate routes per code.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which investigator tool collects evidence of accelerant use?',
        'choices'     => json_encode([
            'Vapor detector',
            'Thermal imager',
            'Hydrant wrench',
            'Pitot gauge',
        ]),
        'answer'      => 'Vapor detector',
        'explanation' => 'Portable hydrocarbon vapor detectors help identify traces of ignitable liquids at a fire scene.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which code requires installation of emergency power for fire alarm systems?',
        'choices'     => json_encode([
            'NFPA 72',
            'NFPA 10',
            'NFPA 13',
            'NFPA 101',
        ]),
        'answer'      => 'NFPA 72',
        'explanation' => 'NFPA 72 mandates standby and auxiliary power sources to maintain alarm functionality during outages.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'What is the MAXIMUM allowable storage height under a standard sprinkler head?',
        'choices'     => json_encode([
            '18 inches',
            '12 inches',
            '24 inches',
            '30 inches',
        ]),
        'answer'      => '18 inches',
        'explanation' => 'NFPA 13 and NFPA 101 require at least an 18″ clearance below sprinkler deflectors to storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which preventive measure reduces false fire alarm activations in kitchens?',
        'choices'     => json_encode([
            'Install heat detectors instead of smoke detectors',
            'Cover all smoke heads with plastic',
            'Disable alarm system during cooking',
            'Place extinguishers under hood',
        ]),
        'answer'      => 'Install heat detectors instead of smoke detectors',
        'explanation' => 'Heat detectors are less sensitive to cooking smoke, reducing nuisance alarms in kitchen areas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which document must show test dates and results for kitchen hood suppression systems?',
        'choices'     => json_encode([
            'Inspection and test record',
            'Fire drill log',
            'Incident report',
            'Pre-plan survey',
        ]),
        'answer'      => 'Inspection and test record',
        'explanation' => 'NFPA 96 requires documentation of all inspections, tests, and maintenance for hood systems.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which fire prevention measure addresses static-electric hazards during fuel transfer?',
        'choices'     => json_encode([
            'Bonding and grounding',
            'Use of wood pallets',
            'Closed trash chutes',
            'Smoke curtains installed',
        ]),
        'answer'      => 'Bonding and grounding',
        'explanation' => 'Proper bonding and grounding dissipate static charge to prevent ignition during flammable liquid transfers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which action is REQUIRED when a suppression system valve is found closed during inspection?',
        'choices'     => json_encode([
            'Tag and lock in the open position',
            'Leave as is',
            'Remove valve',
            'Paint valve red',
        ]),
        'answer'      => 'Tag and lock in the open position',
        'explanation' => 'Valves must be secured and tagged to remain open, preventing accidental system isolation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which smoke management strategy is MOST effective in a large atrium?',
        'choices'     => json_encode([
            'Automatic smoke vents at roof',
            'Horizontal vents only',
            'Closed building tight',
            'Portable fans inside only',
        ]),
        'answer'      => 'Automatic smoke vents at roof',
        'explanation' => 'Roof vents allow hot smoke to exhaust naturally, preventing buildup in tall open spaces.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which code governs minimum illumination for means of egress?',
        'choices'     => json_encode([
            'NFPA 101',
            'NFPA 10',
            'NFPA 80',
            'NFPA 72',
        ]),
        'answer'      => 'NFPA 101',
        'explanation' => 'NFPA 101 Life Safety Code specifies illumination requirements for exit paths and egress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which inspection frequency is REQUIRED for emergency lighting systems?',
        'choices'     => json_encode([
            'Monthly functional test and annual duration test',
            'Daily',
            'Quarterly',
            'Biennial',
        ]),
        'answer'      => 'Monthly functional test and annual duration test',
        'explanation' => 'NFPA 101 requires monthly operation checks and annual 90-minute battery duration tests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which action must be taken after a failed fire pump churn test?',
        'choices'     => json_encode([
            'Immediately repair and retest before occupancy',
            'Continue normal operations',
            'Ignore until next annual test',
            'Reduce pump pressure',
        ]),
        'answer'      => 'Immediately repair and retest before occupancy',
        'explanation' => 'Pump failures must be corrected and verified to protect life-safety and property without delay.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which feature is REQUIRED on exit discharge doors?',
        'choices'     => json_encode([
            'Panic hardware',
            'Magnetic hold-open',
            'Deadbolt locks',
            'Spring latch only',
        ]),
        'answer'      => 'Panic hardware',
        'explanation' => 'Panic or fire exit hardware enables rapid egress under crowd conditions per egress codes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which record must accompany a new building’s occupancy permit?',
        'choices'     => json_encode([
            'Final fire inspection report',
            'Daily training log',
            'Monthly pump test data',
            'Weekly extinguisher tag',
        ]),
        'answer'      => 'Final fire inspection report',
        'explanation' => 'The authority having jurisdiction requires the final inspection report as a condition of occupancy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which guard is REQUIRED for open flames in public assembly areas?',
        'choices'     => json_encode([
            'Noncombustible guard',
            'Wooden barrier',
            'Plastic shield',
            'Fabric curtain',
        ]),
        'answer'      => 'Noncombustible guard',
        'explanation' => 'Guards preventing direct contact with flame must be of noncombustible material to avoid ignition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which device monitors water flow in a sprinkler riser and sounds an alarm?',
        'choices'     => json_encode([
            'Waterflow switch',
            'Tamper switch',
            'Pressure gauge',
            'Thermometer',
        ]),
        'answer'      => 'Waterflow switch',
        'explanation' => 'Waterflow switches detect movement in sprinkler piping and initiate building alarms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which action is REQUIRED before hot work begins on a vessel containing flammable liquids?',
        'choices'     => json_encode([
            'Purge and inert the vessel',
            'Post fire watch at 100 ft',
            'Close all doors',
            'Disable smoke detectors',
        ]),
        'answer'      => 'Purge and inert the vessel',
        'explanation' => 'Removing vapors and adding inert gas prevents ignition during hot work on tanks or vessels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 5,
        'question'    => 'Which code section regulates storage of combustible dust in industrial facilities?',
        'choices'     => json_encode([
            'NFPA 654',
            'NFPA 30',
            'NFPA 101',
            'NFPA 72',
        ]),
        'answer'      => 'NFPA 654',
        'explanation' => 'NFPA 654, Standard for the Prevention of Fire and Dust Explosions, addresses combustible dust hazards.',
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
