<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which fire command center feature is REQUIRED in high-rise buildings?',
        'choices'     => json_encode([
            'Building status display',
            'Telephone',
            'First aid kit',
            'Ventilation controls',
        ]),
        'answer'      => 'Building status display',
        'explanation' => 'High-rise codes mandate real-time display of fire system status in the command center.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which inspection item ensures emergency power for fire alarms?',
        'choices'     => json_encode([
            'Battery voltage check',
            'Speaker volume test',
            'Smoke test',
            'Door release function',
        ]),
        'answer'      => 'Battery voltage check',
        'explanation' => 'Regular voltage checks confirm standby batteries will power alarms during outages.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'What is the MINIMUM fire-resistance rating for structural columns in an underground parking garage?',
        'choices'     => json_encode([
            '2 hours',
            '1 hour',
            '3 hours',
            '½ hour',
        ]),
        'answer'      => '2 hours',
        'explanation' => 'Underground parking structures require columns rated at least 2 hours for fire integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which fire prevention measure is MOST effective against arson in vacant buildings?',
        'choices'     => json_encode([
            'Secure all openings',
            'Post warning signs',
            'Install paper trash bins',
            'Increase lighting',
        ]),
        'answer'      => 'Secure all openings',
        'explanation' => 'Boarding up or locking all access points deters unauthorized entry and arson attempts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which system must be inspected ANNUALLY for integrity of protection agent?',
        'choices'     => json_encode([
            'Clean agent fire suppression',
            'Class A foam',
            'CO₂ handlines',
            'Dry chemical extinguishers',
        ]),
        'answer'      => 'Clean agent fire suppression',
        'explanation' => 'Clean agent systems require annual checks of agent quantity and cylinder condition under NFPA 2001.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which document outlines responsibilities during a fire safety audit?',
        'choices'     => json_encode([
            'Audit scope and procedure manual',
            'Incident command plan',
            'Pre-incident plan',
            'Daily log',
        ]),
        'answer'      => 'Audit scope and procedure manual',
        'explanation' => 'Audits follow defined scopes and procedures documented in the audit manual for consistency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which measure reduces false alarms from sprinkler systems?',
        'choices'     => json_encode([
            'Heat detector shield',
            'Covering sprinkler heads',
            'Increasing system pressure',
            'Adding more heads',
        ]),
        'answer'      => 'Heat detector shield',
        'explanation' => 'Shields prevent overspray or radiant heat from triggering sprinkler heat-sensitive elements inadvertently.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which signage is REQUIRED at the fire hose valve outlet?',
        'choices'     => json_encode([
            '“Fire Hose” with arrow',
            '“No Parking”',
            '“Hazardous Area”',
            '“Keep Clear”',
        ]),
        'answer'      => '“Fire Hose” with arrow',
        'explanation' => 'Valve outlets must be clearly marked with “Fire Hose” and directional arrows per code.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which action ensures continued function of magnetic fire door holders?',
        'choices'     => json_encode([
            'Test release on alarm weekly',
            'Clean magnets monthly',
            'Lubricate door hinges daily',
            'Adjust door closer annually',
        ]),
        'answer'      => 'Test release on alarm weekly',
        'explanation' => 'Weekly tests confirm magnets release and doors close upon alarm activation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'What is the REQUIRED rating for fire-resistant glazing in exit enclosures?',
        'choices'     => json_encode([
            '45 minutes',
            '20 minutes',
            '90 minutes',
            '120 minutes',
        ]),
        'answer'      => '45 minutes',
        'explanation' => 'Glazing in exit enclosures must resist fire for at least 45 minutes to maintain separation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which preventive action addresses fire risk in waste compactors?',
        'choices'     => json_encode([
            'Install heat/smoke detectors',
            'Use wooden pallets',
            'Allow inside dumpsters',
            'Place near exits',
        ]),
        'answer'      => 'Install heat/smoke detectors',
        'explanation' => 'Detectors in compactor rooms alert early to smoldering or mechanical fires in waste piles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which code governs installation of emergency voice communication systems?',
        'choices'     => json_encode([
            'NFPA 72',
            'NFPA 1',
            'NFPA 13',
            'NFPA 101',
        ]),
        'answer'      => 'NFPA 72',
        'explanation' => 'NFPA 72 covers the requirements for fire alarm and emergency communication systems installation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which inspection frequency is REQUIRED for fire dampers in HVAC ducts?',
        'choices'     => json_encode([
            'Every 4 years',
            'Monthly',
            'Annually',
            'Every 5 years',
        ]),
        'answer'      => 'Every 4 years',
        'explanation' => 'NFPA 80 mandates damper testing and inspection at 4-year intervals to ensure damper functionality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which measure ensures safe storage of compressed gas cylinders indoors?',
        'choices'     => json_encode([
            'Secure upright with chains',
            'Lay horizontally',
            'Store near heat sources',
            'Keep in closets',
        ]),
        'answer'      => 'Secure upright with chains',
        'explanation' => 'Cylinders must be chained upright to prevent tipping and valve damage indoors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which document must accompany plans for installation of a fixed foam system?',
        'choices'     => json_encode([
            'Hydraulic calculation sheet',
            'Vendor catalog only',
            'Evacuation plan',
            'Fire drill log',
        ]),
        'answer'      => 'Hydraulic calculation sheet',
        'explanation' => 'Foam system plans require calculations to verify water supply and discharge rates per NFPA 11.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which equipment must be checked weekly in a standpipe riser room?',
        'choices'     => json_encode([
            'Control valves and signage',
            'Fire extinguisher gauge',
            'Exit lighting',
            'Smoke detector batteries',
        ]),
        'answer'      => 'Control valves and signage',
        'explanation' => 'Valves must be in the correct position and labeled weekly to ensure standpipe readiness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'What is the REQUIRED fire-resistance rating for a fire wall separating adjacent buildings?',
        'choices'     => json_encode([
            '3 hours',
            '1 hour',
            '2 hours',
            '4 hours',
        ]),
        'answer'      => '4 hours',
        'explanation' => 'Fire walls between buildings must resist fire for a minimum of 4 hours to maintain separation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which fire prevention practice reduces risk from portable heaters?',
        'choices'     => json_encode([
            'Maintain 3-foot clearance from combustibles',
            'Place on carpet',
            'Use near curtains',
            'Operate unattended overnight',
        ]),
        'answer'      => 'Maintain 3-foot clearance from combustibles',
        'explanation' => 'Heaters require a safety zone of at least 3′ to prevent ignition of nearby materials.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which inspection checks the functionality of kitchen hood fire suppression?',
        'choices'     => json_encode([
            'Simulated actuation test',
            'Visual check only',
            'Flow test',
            'Smoke test',
        ]),
        'answer'      => 'Simulated actuation test',
        'explanation' => 'Suppression systems are tested by simulating actuation to verify discharge to hood nozzles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 4,
        'question'    => 'Which record of corrective actions must be updated after follow-up fire inspections?',
        'choices'     => json_encode([
            'Inspection report with re-inspection results',
            'Daily log',
            'Pre-incident plan',
            'Incident report',
        ]),
        'answer'      => 'Inspection report with re-inspection results',
        'explanation' => 'Follow-up inspections and their outcomes are documented in updated inspection reports per code.',
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
