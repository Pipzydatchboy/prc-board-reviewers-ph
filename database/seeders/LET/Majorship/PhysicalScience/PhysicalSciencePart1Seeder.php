<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart1Seeder extends Seeder
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

// 1
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which step in the scientific method involves forming a testable statement?",
    'choices'     => json_encode([
        'Hypothesis formulation',
        'Observation',
        'Data collection',
        'Conclusion',
    ]),
    'answer'      => 'Hypothesis formulation',
    'explanation' => 'Formulating a hypothesis is stating a testable prediction based on observations.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 2
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What is the SI base unit for measuring length?",
    'choices'     => json_encode([
        'Meter',
        'Gram',
        'Second',
        'Liter',
    ]),
    'answer'      => 'Meter',
    'explanation' => 'The meter (m) is the SI base unit of length.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 3
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which instrument measures electric current?",
    'choices'     => json_encode([
        'Ammeter',
        'Voltmeter',
        'Thermometer',
        'Barometer',
    ]),
    'answer'      => 'Ammeter',
    'explanation' => 'An ammeter is used to measure electric current in amperes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 4
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What does a control variable represent in an experiment?",
    'choices'     => json_encode([
        'A factor kept constant',
        'The factor being tested',
        'The observed response',
        'The instrument error margin',
    ]),
    'answer'      => 'A factor kept constant',
    'explanation' => 'Control variables are conditions kept the same to ensure a fair test.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 5
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which graph is best for showing change over time?",
    'choices'     => json_encode([
        'Line graph',
        'Bar graph',
        'Pie chart',
        'Histogram',
    ]),
    'answer'      => 'Line graph',
    'explanation' => 'Line graphs effectively display trends and changes over continuous data.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 6
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What is precision in measurement?",
    'choices'     => json_encode([
        'Closeness of repeated measurements to each other',
        'Closeness to the true value',
        'Size of the measurement unit',
        'Random error magnitude',
    ]),
    'answer'      => 'Closeness of repeated measurements to each other',
    'explanation' => 'Precision refers to the reproducibility of measurements under unchanged conditions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 7
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which lab safety symbol indicates a corrosive substance?",
    'choices'     => json_encode([
        'Test tube pouring liquid on hand',
        'Flame',
        'Skull and crossbones',
        'Radiation trefoil',
    ]),
    'answer'      => 'Test tube pouring liquid on hand',
    'explanation' => 'This symbol warns of substances that can damage skin or metals.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 8
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What type of error is due to instrument calibration?",
    'choices'     => json_encode([
        'Systematic error',
        'Random error',
        'Parallax error',
        'Human error',
    ]),
    'answer'      => 'Systematic error',
    'explanation' => 'Systematic errors are consistent biases from flawed instruments or methods.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 9
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What unit measures amount of substance?",
    'choices'     => json_encode([
        'Mole',
        'Candela',
        'Kelvin',
        'Lumen',
    ]),
    'answer'      => 'Mole',
    'explanation' => 'The mole (mol) is the SI unit for the amount of substance.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 10
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which instrument measures atmospheric pressure?",
    'choices'     => json_encode([
        'Barometer',
        'Hygrometer',
        'Anemometer',
        'Thermometer',
    ]),
    'answer'      => 'Barometer',
    'explanation' => 'A barometer measures atmospheric pressure in units such as pascals or mmHg.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 11
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What does a pH meter measure?",
    'choices'     => json_encode([
        'Acidity of solution',
        'Density of liquid',
        'Temperature',
        'Conductivity',
    ]),
    'answer'      => 'Acidity of solution',
    'explanation' => 'A pH meter measures the hydrogen ion concentration to determine acidity or alkalinity.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 12
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which variable is plotted on the x-axis in an independent-independent graph?",
    'choices'     => json_encode([
        'Independent variable',
        'Dependent variable',
        'Control variable',
        'Random variable',
    ]),
    'answer'      => 'Independent variable',
    'explanation' => 'The independent variable is controlled or changed by the experimenter and plotted on the x-axis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 13
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What is the main purpose of a titration?",
    'choices'     => json_encode([
        'Determine concentration of a solution',
        'Measure pH',
        'Calibrate a pipette',
        'Sterilize equipment',
    ]),
    'answer'      => 'Determine concentration of a solution',
    'explanation' => 'Titration allows quantitative analysis by reacting known volumes of solutions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 14
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which safety equipment protects eyes from chemical splashes?",
    'choices'     => json_encode([
        'Safety goggles',
        'Lab coat',
        'Gloves',
        'Face shield only',
    ]),
    'answer'      => 'Safety goggles',
    'explanation' => 'Goggles form a seal around the eyes to prevent chemical or particulate entry.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 15
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What is the meaning of qualitative data?",
    'choices'     => json_encode([
        'Descriptive, non-numerical observations',
        'Numerical measurements',
        'Statistical values',
        'Repeated trials',
    ]),
    'answer'      => 'Descriptive, non-numerical observations',
    'explanation' => 'Qualitative data describe qualities or characteristics without numerical measurement.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 16
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which lab technique separates mixtures based on boiling points?",
    'choices'     => json_encode([
        'Distillation',
        'Filtration',
        'Chromatography',
        'Decantation',
    ]),
    'answer'      => 'Distillation',
    'explanation' => 'Distillation uses vaporization and condensation to separate components by boiling point.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 17
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What measurement indicates uncertainty in a value?",
    'choices'     => json_encode([
        'Error margin',
        'Mean',
        'Mode',
        'Constant',
    ]),
    'answer'      => 'Error margin',
    'explanation' => 'Error margin expresses the range within which the true value is expected.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 18
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Which glassware provides the most accurate volume measurement?",
    'choices'     => json_encode([
        'Volumetric flask',
        'Beaker',
        'Graduated cylinder',
        'Erlenmeyer flask',
    ]),
    'answer'      => 'Volumetric flask',
    'explanation' => 'Volumetric flasks are calibrated for precise volume at a single mark.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 19
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "What does a calorimeter measure?",
    'choices'     => json_encode([
        'Heat flow in reactions',
        'Electric current',
        'Mass change',
        'Light intensity',
    ]),
    'answer'      => 'Heat flow in reactions',
    'explanation' => 'A calorimeter quantifies heat released or absorbed in chemical processes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 20
$batch[] = [
    'subject_id'  => 13,
    'part'        => 1,
    'question'    => "Why is repeatability important in experiments?",
    'choices'     => json_encode([
        'To confirm reliability of results',
        'To speed up the process',
        'To use more materials',
        'To change variables',
    ]),
    'answer'      => 'To confirm reliability of results',
    'explanation' => 'Repeatability ensures consistent findings under the same conditions.',
    'created_at'  => $now,
    'updated_at'  => $now,
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
