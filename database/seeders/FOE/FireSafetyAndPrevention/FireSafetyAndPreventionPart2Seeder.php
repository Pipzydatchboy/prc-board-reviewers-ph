<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Which document must a building owner submit for new construction fire safety approval?',
        'choices'     => json_encode([
            'Fire safety design plan',
            'Incident report',
            'Evacuation drill log',
            'Pump test certificate',
        ]),
        'answer'      => 'Fire safety design plan',
        'explanation' => 'Owners submit fire safety design plans for review of life-safety features prior to occupancy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'What is the MAXIMUM allowable travel distance to an exit in a non-sprinklered assembly occupancy?',
        'choices'     => json_encode([
            '200 feet',
            '150 feet',
            '100 feet',
            '75 feet',
        ]),
        'answer'      => '200 feet',
        'explanation' => 'Non-sprinklered assembly occupancies permit up to 200′ travel to exit under modern codes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which element is NOT required in a fire safety and evacuation plan?',
        'choices'     => json_encode([
            'Fire department contact',
            'Evacuation routes',
            'Material safety data sheets',
            'Assembly point location',
        ]),
        'answer'      => 'Material safety data sheets',
        'explanation' => 'Fire plans require contact info, routes, and assembly points; MSDS are not part of evacuation plans.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which fire prevention measure reduces ignition of trash in commercial buildings?',
        'choices'     => json_encode([
            'Enclosed trash chutes',
            'Open trash bins',
            'Storage in stairwells',
            'Outdoor dumpsters only',
        ]),
        'answer'      => 'Enclosed trash chutes',
        'explanation' => 'Enclosed, fire-rated chutes prevent ignition sources from contacting waste and spreading fire.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'During plan review, what hazard is assessed for high-rise buildings?',
        'choices'     => json_encode([
            'Standpipe location',
            'Fuel load of contents',
            'Grass height around perimeter',
            'Firefighter turnout storage',
        ]),
        'answer'      => 'Standpipe location',
        'explanation' => 'High-rise plan review verifies standpipe outlets are within code-required proximity to occupants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which inspection frequency applies to commercial cooking hoods and ducts?',
        'choices'     => json_encode([
            'Monthly',
            'Quarterly',
            'Annually',
            'Bi-annually',
        ]),
        'answer'      => 'Quarterly',
        'explanation' => 'NFPA 96 requires quarterly cleaning and inspection of commercial kitchen exhaust systems.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which fire prevention activity involves delivering safety talks to employees?',
        'choices'     => json_encode([
            'Fire safety education',
            'Plan review',
            'Code enforcement',
            'Smoke testing',
        ]),
        'answer'      => 'Fire safety education',
        'explanation' => 'Education programs inform occupants about prevention, evacuation, and extinguisher use.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which device prevents tampering with fire sprinkler control valves?',
        'choices'     => json_encode([
            'Tamper switch',
            'Pressure gauge',
            'Flow switch',
            'Alarm bell',
        ]),
        'answer'      => 'Tamper switch',
        'explanation' => 'Tamper switches alarm if control valves are closed or moved from proper position.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which code section regulates storage of flammable liquids in drums?',
        'choices'     => json_encode([
            'NFPA 30',
            'NFPA 1',
            'NFPA 704',
            'NFPA 101',
        ]),
        'answer'      => 'NFPA 30',
        'explanation' => 'NFPA 30, Flammable and Combustible Liquids Code, governs safe handling and storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which fire prevention record must be kept ON-SITE for inspections?',
        'choices'     => json_encode([
            'Fire extinguisher tag',
            'Incident response report',
            'Training attendance log',
            'Pre-plan survey',
        ]),
        'answer'      => 'Fire extinguisher tag',
        'explanation' => 'Tags documenting monthly checks must remain on or near extinguishers for inspector review.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which sign is REQUIRED at every stairway access door?',
        'choices'     => json_encode([
            '“Stairway” with directional arrow',
            '“No Smoking”',
            '“Exit” only',
            '“Fire Alarm Pull”',
        ]),
        'answer'      => '“Stairway” with directional arrow',
        'explanation' => 'Stair access doors must be identified to facilitate occupant evacuation and firefighter operations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'During fire safety inspection, which condition is a VIOLATION?',
        'choices'     => json_encode([
            'Portable heater near combustibles',
            'Fire extinguisher in cabinet',
            'Clear exit corridor',
            'Exit sign illuminated',
        ]),
        'answer'      => 'Portable heater near combustibles',
        'explanation' => 'Heaters placed close to flammables create ignition and fire-spread hazards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which form of code enforcement involves issuing fines?',
        'choices'     => json_encode([
            'Administrative penalty',
            'Verbal warning',
            'Educational notice',
            'Plan approval',
        ]),
        'answer'      => 'Administrative penalty',
        'explanation' => 'Penalties enforce compliance by levying fines or revoking permits for violations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which safety device is REQUIRED in a high-rise elevator lobby?',
        'choices'     => json_encode([
            'Firefighter\'s service elevator',
            'Smoke detector',
            'Carbon monoxide sensor',
            'Deluge system',
        ]),
        'answer'      => 'Smoke detector',
        'explanation' => 'Elevator lobbies in high-rises require detectors to prevent elevator use during fires.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which training is MANDATORY for all new employees in a manufacturing plant?',
        'choices'     => json_encode([
            'Fire extinguisher use',
            'Vehicle operations',
            'Hazardous waste handling',
            'Electrical safety',
        ]),
        'answer'      => 'Fire extinguisher use',
        'explanation' => 'Employees must know how to operate extinguishers as part of workplace fire safety training.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which system uses a heat-activated element to release closure of fire doors?',
        'choices'     => json_encode([
            'Fusible link door closer',
            'Magnetic hold-open',
            'Smoke curtain',
            'Manual release station',
        ]),
        'answer'      => 'Fusible link door closer',
        'explanation' => 'Fusible links melt at specified temperature, allowing doors to close and contain fire.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which inspection checks sprinkler piping for obstruction?',
        'choices'     => json_encode([
            'Internal obstruction test',
            'Hydrostatic test',
            'Churn test',
            'Alarm test',
        ]),
        'answer'      => 'Internal obstruction test',
        'explanation' => 'Internal obstruction tests verify piping is free of debris that could block water flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which code requires signage for electrical panels?',
        'choices'     => json_encode([
            'NFPA 70',
            'NFPA 1',
            'NFPA 101',
            'NFPA 13',
        ]),
        'answer'      => 'NFPA 70',
        'explanation' => 'The National Electrical Code mandates marking electrical equipment and panel access points.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which metric is used to classify smoke detector sensitivity?',
        'choices'     => json_encode([
            'Obscuration per foot',
            'Response time index',
            'Sound level dB',
            'Operating temperature',
        ]),
        'answer'      => 'Obscuration per foot',
        'explanation' => 'Detector sensitivity is rated by the percentage of light obscured per foot of path length.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 2,
        'question'    => 'Which action by a fire inspector follows issuance of a Notice of Violation?',
        'choices'     => json_encode([
            'Re-inspection after corrections',
            'Immediate closure',
            'Report to prosecutor',
            'Ignore until next cycle',
        ]),
        'answer'      => 'Re-inspection after corrections',
        'explanation' => 'Inspectors verify that cited deficiencies have been corrected at a follow-up inspection.',
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
