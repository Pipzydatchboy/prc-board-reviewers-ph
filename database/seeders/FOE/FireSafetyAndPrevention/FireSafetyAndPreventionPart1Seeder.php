<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'Which NFPA standard specifies requirements for fire prevention programs?',
        'choices'     => json_encode([
            'NFPA 1',
            'NFPA 13',
            'NFPA 72',
            'NFPA 101',
        ]),
        'answer'      => 'NFPA 1',
        'explanation' => 'NFPA 1, Fire Code, provides a comprehensive fire prevention program framework.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'What is the PRIMARY purpose of a fire safety inspection?',
        'choices'     => json_encode([
            'Ensure compliance with codes',
            'Train occupants',
            'Test fire pumps',
            'Install detectors',
        ]),
        'answer'      => 'Ensure compliance with codes',
        'explanation' => 'Inspections verify that buildings and systems meet fire and life-safety requirements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which fire risk assessment step involves identifying potential ignition sources?',
        'choices'     => json_encode([
            'Hazard identification',
            'Control measure selection',
            'Risk evaluation',
            'Documentation',
        ]),
        'answer'      => 'Hazard identification',
        'explanation' => 'Hazard identification catalogs all conditions that could start or fuel a fire.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which construction material class has the lowest flame spread index?',
        'choices'     => json_encode([
            'Class A',
            'Class B',
            'Class C',
            'Class D',
        ]),
        'answer'      => 'Class A',
        'explanation' => 'Class A materials (e.g., concrete, masonry) have flame-spread ≤25, the most fire-resistant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'What is the MINIMUM width for an unobstructed means of egress in a public building?',
        'choices'     => json_encode([
            '32 inches',
            '24 inches',
            '20 inches',
            '36 inches',
        ]),
        'answer'      => '32 inches',
        'explanation' => 'Code requires at least 32″ clear width for occupant egress capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which device must be provided within 10 feet of any point in a means of egress?',
        'choices'     => json_encode([
            'Exit sign',
            'Fire extinguisher',
            'Smoke detector',
            'Hose valve',
        ]),
        'answer'      => 'Exit sign',
        'explanation' => 'Exit signage with illumination is required to mark egress paths clearly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'What is the REQUIRED minimum rating for a fire door assembly in a corridor?',
        'choices'     => json_encode([
            '20 minutes',
            '45 minutes',
            '60 minutes',
            '90 minutes',
        ]),
        'answer'      => '20 minutes',
        'explanation' => 'Corridor doors must resist fire for at least 20 minutes to protect egress routes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which occupancy classification has the HIGHEST life-safety risk rating?',
        'choices'     => json_encode([
            'Assembly',
            'Storage',
            'Factory',
            'Accessory',
        ]),
        'answer'      => 'Assembly',
        'explanation' => 'Assembly occupancies involve large crowds with limited supervision, raising life-safety risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which fire detection system initiates alarm only when smoke density exceeds a threshold?',
        'choices'     => json_encode([
            'Photoelectric detector',
            'Ionization detector',
            'Heat detector',
            'Manual pull station',
        ]),
        'answer'      => 'Photoelectric detector',
        'explanation' => 'Photoelectric units respond to visible smoke particles once density surpasses set point.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which class of extinguisher is REQUIRED for ordinary combustibles like wood and paper?',
        'choices'     => json_encode([
            'Class A',
            'Class B',
            'Class C',
            'Class D',
        ]),
        'answer'      => 'Class A',
        'explanation' => 'Class A extinguishers use water or foam to cool and quench common combustibles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which code requires inspection of portable fire extinguishers monthly?',
        'choices'     => json_encode([
            'NFPA 10',
            'NFPA 13',
            'NFPA 25',
            'NFPA 72',
        ]),
        'answer'      => 'NFPA 10',
        'explanation' => 'NFPA 10, Standard for Portable Fire Extinguishers, mandates monthly inspections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'What is the MAXIMUM travel distance to an extinguisher for Class A hazards?',
        'choices'     => json_encode([
            '75 feet',
            '50 feet',
            '100 feet',
            '25 feet',
        ]),
        'answer'      => '75 feet',
        'explanation' => 'Travel distance shall not exceed 75′ to reach extinguisher for ordinary hazards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which form documents observed deficiencies during a fire inspection?',
        'choices'     => json_encode([
            'Notice of Violation',
            'Incident Report',
            'Pre-Plan Form',
            'Daily Log',
        ]),
        'answer'      => 'Notice of Violation',
        'explanation' => 'A Notice of Violation records code non-compliance and required corrective actions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which system is REQUIRED where occupant load exceeds 300?',
        'choices'     => json_encode([
            'Automatic sprinkler',
            'Smoke detector',
            'Hose standpipe',
            'Fire alarm control panel',
        ]),
        'answer'      => 'Automatic sprinkler',
        'explanation' => 'High-occupancy buildings require sprinklers for rapid fire control and life-safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which barrier type prevents vertical fire spread in atriums?',
        'choices'     => json_encode([
            'Smoke curtain',
            'Fire wall',
            'Fire door',
            'Fire-rated floor',
        ]),
        'answer'      => 'Smoke curtain',
        'explanation' => 'Smoke curtains deployed at ceiling edges control smoke movement vertically in atriums.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which maintenance frequency is REQUIRED for fire pumps under NFPA 25?',
        'choices'     => json_encode([
            'Weekly',
            'Monthly',
            'Annually',
            'Quarterly',
        ]),
        'answer'      => 'Weekly',
        'explanation' => 'NFPA 25 mandates weekly churn tests of fire pumps to verify proper operation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which occupancy requires a fire safety and evacuation plan by code?',
        'choices'     => json_encode([
            'Educational',
            'Storage',
            'Factory',
            'Accessory',
        ]),
        'answer'      => 'Educational',
        'explanation' => 'Educational occupancies (schools) mandate documented evacuation plans for students.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'What is the MINIMUM illumination level for exit signs in luminance?',
        'choices'     => json_encode([
            '5 foot-candles',
            '1 foot-candles',
            '0.1 foot-candle',
            '10 foot-candles',
        ]),
        'answer'      => '1 foot-candles',
        'explanation' => 'Exit signs must be illuminated at least 1 fc to ensure visibility in egress paths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which device monitors sprinkler water flow and sends alarm signal?',
        'choices'     => json_encode([
            'Flow switch',
            'Pressure gauge',
            'Tamper switch',
            'Alarm valve',
        ]),
        'answer'      => 'Flow switch',
        'explanation' => 'Flow switches detect water movement in system piping and activate alarms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 1,
        'question'    => 'Which records retention period is MINIMUM for fire inspection reports?',
        'choices'     => json_encode([
            '5 years',
            '1 year',
            '10 years',
            '2 years',
        ]),
        'answer'      => '5 years',
        'explanation' => 'Most codes require keeping inspection documentation for at least five years for accountability.',
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
