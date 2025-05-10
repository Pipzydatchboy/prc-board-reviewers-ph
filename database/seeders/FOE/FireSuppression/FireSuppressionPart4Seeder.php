<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart4Seeder extends Seeder
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
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which component of a fire pump ensures air is removed before water delivery?',
        'choices'     => json_encode([
            'Primer',
            'Relief valve',
            'Intake strainer',
            'Discharge gauge',
        ]),
        'answer'      => 'Primer',
        'explanation' => 'The primer evacuates air from the pump casing, allowing it to draw water effectively.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'What is the function of a relief valve on a fire pump?',
        'choices'     => json_encode([
            'Prevent overpressure',
            'Measure intake pressure',
            'Split hoselines',
            'Control foam ratio',
        ]),
        'answer'      => 'Prevent overpressure',
        'explanation' => 'A relief valve opens to discharge excess pressure and protect the pump and hoses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'During pump operation, which pressure gauge reading indicates residual pressure?',
        'choices'     => json_encode([
            'Discharge gauge under flow',
            'Intake gauge under flow',
            'Static intake gauge',
            'Nozzle gauge',
        ]),
        'answer'      => 'Discharge gauge under flow',
        'explanation' => 'Residual (discharge) pressure is measured while water is flowing to assess system capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which hose material offers least friction loss and highest durability?',
        'choices'     => json_encode([
            'Hard suction hose',
            'Nylon jacket hose',
            'Rubber-lined hose',
            'Cotton-lined hose',
        ]),
        'answer'      => 'Rubber-lined hose',
        'explanation' => 'Rubber-lined hose has smooth interior to minimize friction and withstand abrasion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'What is the STANDARD method to secure a coupling when laying hose under pressure?',
        'choices'     => json_encode([
            'Quarter-turn tighten',
            'Cross-lay stop',
            'Clamp with spanner',
            'Use quick-connect',
        ]),
        'answer'      => 'Clamp with spanner',
        'explanation' => 'A coupling spanner is used to tighten couplings securely to prevent leaks under pressure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which NFPA standard covers firefighter personal protective equipment?',
        'choices'     => json_encode([
            'NFPA 1971',
            'NFPA 1901',
            'NFPA 1851',
            'NFPA 1001',
        ]),
        'answer'      => 'NFPA 1971',
        'explanation' => 'NFPA 1971 specifies requirements for structural firefighting protective ensembles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which safety device prevents SCBA air cylinder over-pressurization?',
        'choices'     => json_encode([
            'Pressure relief valve',
            'Regulator',
            'Facepiece seal',
            'Emergency bypass',
        ]),
        'answer'      => 'Pressure relief valve',
        'explanation' => 'The relief valve vents excess pressure to protect the cylinder and user.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'What is the MINIMUM acceptable flow test duration for a fire pump according to NFPA?',
        'choices'     => json_encode([
            '2 hours',
            '30 minutes',
            '1 hour',
            '15 minutes',
        ]),
        'answer'      => '2 hours',
        'explanation' => 'NFPA 1901 requires an endurance test of at least 2 hours at rated capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which color band typically identifies a 1½-inch hoseline coupling?',
        'choices'     => json_encode([
            'Red',
            'Yellow',
            'Blue',
            'Green',
        ]),
        'answer'      => 'Red',
        'explanation' => 'Standard color coding: 1½″ = red, 2½″ = yellow, 3″ = blue, 4″ = green/black.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which pump priming method uses a vacuum pump?',
        'choices'     => json_encode([
            'Mechanical primer',
            'Hand primer',
            'Foot valve',
            'Air-aspirating nozzle',
        ]),
        'answer'      => 'Mechanical primer',
        'explanation' => 'Mechanical primers create vacuum to assist in priming without manual action.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'What gauge placement is required to measure hydrant static pressure?',
        'choices'     => json_encode([
            'On residual port no-flow',
            'On intake port under flow',
            'At nozzle under flow',
            'At pump panel during test',
        ]),
        'answer'      => 'On residual port no-flow',
        'explanation' => 'Static pressure is measured at residual port with hydrant outlet capped and no flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which tool is used to break glass during forcible entry for ventilation?',
        'choices'     => json_encode([
            'Window punch',
            'Halligan bar',
            'Bolt cutters',
            'Hydraulic spreader',
        ]),
        'answer'      => 'Window punch',
        'explanation' => 'A window punch (spring-loaded) safely and quickly breaks glazing for ventilation or entry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which technique reduces nozzle reaction on large hoselines?',
        'choices'     => json_encode([
            'Use pistol-grip nozzle',
            'Switch to fog pattern',
            'Apply handline strap',
            'Clamp the line',
        ]),
        'answer'      => 'Apply handline strap',
        'explanation' => 'A handline strap transfers reaction force to body, reducing nozzle kick.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'In master stream operations, what minimum flow should a deck gun deliver?',
        'choices'     => json_encode([
            '350 gpm',
            '250 gpm',
            '500 gpm',
            '150 gpm',
        ]),
        'answer'      => '350 gpm',
        'explanation' => 'NFPA 1901 specifies at least 350 gpm from a deck gun for effective master streams.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which foam agent type resists alcohol fuel fires?',
        'choices'     => json_encode([
            'Alcohol-resistant AFFF',
            'Protein foam',
            'Class A foam',
            'Film-forming fluoroprotein',
        ]),
        'answer'      => 'Alcohol-resistant AFFF',
        'explanation' => 'Alcohol-resistant formulations include polymer additives to resist alcohol fuel breakdown.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which practice best prevents hose kinks during deployment?',
        'choices'     => json_encode([
            'Use figure-eight lay',
            'Straight lay',
            'Coiled lay',
            'Reverse lay',
        ]),
        'answer'      => 'Figure-eight lay',
        'explanation' => 'Figure-eight technique avoids twists that lead to kinks when hose is charged.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which device measures friction loss directly in a hoseline?',
        'choices'     => json_encode([
            'Pitot gauge',
            'Pressure regulator',
            'Intake gauge',
            'Flowmeter',
        ]),
        'answer'      => 'Pitot gauge',
        'explanation' => 'A pitot gauge measures stream velocity pressure, from which friction loss is calculated.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which SCBA cylinder type provides longest duration under standard 30% voluntary reserves?',
        'choices'     => json_encode([
            '4500 psi cylinder',
            '2216 psi cylinder',
            '3000 psi cylinder',
            '1500 psi cylinder',
        ]),
        'answer'      => '4500 psi cylinder',
        'explanation' => 'Higher-pressure (4500 psi) cylinders store more air for longer use under equal reserves.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which action improves water hammer protection in pump shutdown?',
        'choices'     => json_encode([
            'Close discharge slowly',
            'Open relief valve fully',
            'Rapid engine shutdown',
            'Close intake suddenly',
        ]),
        'answer'      => 'Close discharge slowly',
        'explanation' => 'Gradual closure reduces pressure surges and water hammer during pump shutdown.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 4,
        'question'    => 'Which maintenance task MOST directly prevents hose deterioration?',
        'choices'     => json_encode([
            'Flush with clean water',
            'Rotate couplings',
            'Store charged',
            'Lay in sun',
        ]),
        'answer'      => 'Flush with clean water',
        'explanation' => 'Flushing removes debris and chemicals that degrade hose lining and jacket fibers.',
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
