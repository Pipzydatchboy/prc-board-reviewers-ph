<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart2Seeder extends Seeder
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
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which fire stream pattern is BEST for extinguishing Class B liquid fires?',
    'choices'     => json_encode([
        'Narrow fog',
        'Straight stream',
        'Wide fog',
        'Broken-stream',
    ]),
    'answer'      => 'Wide fog',
    'explanation' => 'Wide fog creates a blanket that suppresses vapors and cools the fuel surface without spreading it.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//2
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'What is the recommended discharge pressure for a 2½-inch smooth bore nozzle at 50 gpm?',
    'choices'     => json_encode([
        '50 psi',
        '100 psi',
        '75 psi',
        '150 psi',
    ]),
    'answer'      => '50 psi',
    'explanation' => 'Smooth bore nozzles flow at 50 psi to produce a coherent stream with maximum reach.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//3
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which foam type is MOST appropriate for hydrocarbon fuel fires?',
    'choices'     => json_encode([
        'AFFF (aqueous film-forming foam)',
        'Alcohol-resistant foam',
        'Protein foam',
        'Class A foam',
    ]),
    'answer'      => 'AFFF (aqueous film-forming foam)',
    'explanation' => 'AFFF forms a film that seals hydrocarbon fuel surfaces and prevents vapor release.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//4
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'In applying Class A foam for overhaul, at what typical proportioning rate is concentrate added?',
    'choices'     => json_encode([
        '0.1–0.3 %',
        '1 %',
        '3 %',
        '6 %',
    ]),
    'answer'      => '0.1–0.3 %',
    'explanation' => 'Low expansion Class A foam is used at 0.1–0.3% to improve water’s wetting and penetrative capabilities.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//5
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which nozzle feature helps prevent inadvertent shifting from fog to straight stream?',
    'choices'     => json_encode([
        'Locking ring',
        'Venturi eductor',
        'Petticoat',
        'Diffuser pin',
    ]),
    'answer'      => 'Locking ring',
    'explanation' => 'A locking ring secures the shutoff or pattern control to avoid accidental changes under pressure.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//6
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'What is the primary purpose of a confined-space pre-attack plan?',
    'choices'     => json_encode([
        'Outline rescue procedures',
        'Specify water supply',
        'Identify building exits',
        'Map fire department access',
    ]),
    'answer'      => 'Outline rescue procedures',
    'explanation' => 'Confined-space planning focuses on safe rescue operations due to high-risk atmospheres and limited egress.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//7
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which technique is used to apply water gently to prevent steam burns to trapped victims?',
    'choices'     => json_encode([
        'Narrow fog',
        'Broken-stream',
        'Solid stream',
        'Direct curtain',
    ]),
    'answer'      => 'Broken-stream',
    'explanation' => 'Broken-stream (penciling) delivers water in short pulses, reducing steam production.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//8
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'When testing a new nozzle flow, which tool measures actual gpm accurately?',
    'choices'     => json_encode([
        'Flowmeter',
        'Pitot gauge',
        'Pressure gauge',
        'Thermometer',
    ]),
    'answer'      => 'Flowmeter',
    'explanation' => 'A flowmeter directly measures discharge flow rate without reliance on pressure-based calculations.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//9
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which foam proportioning device uses venturi effect to draft concentrate?',
    'choices'     => json_encode([
        'Eductor',
        'Balanced-pressure pump',
        'In-line static mixer',
        'Air-aspirating nozzle',
    ]),
    'answer'      => 'Eductor',
    'explanation' => 'An eductor uses water flow to create suction that draws foam concentrate into the stream.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//10
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'What is the MOST effective method to protect exposures during a defensive attack?',
    'choices'     => json_encode([
        'Wide fog curtain',
        'Straight stream sweep',
        'Broken-stream pulses',
        'Dry chemical barrier',
    ]),
    'answer'      => 'Wide fog curtain',
    'explanation' => 'A fog curtain absorbs heat and deflects radiated heat from exposures without water runoff issues.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//11
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'During interior overhaul, which foam is appropriate for smoldering combustible debris?',
    'choices'     => json_encode([
        'Class A foam',
        'AFFF',
        'Protein foam',
        'Class B alcohol-resistant foam',
    ]),
    'answer'      => 'Class A foam',
    'explanation' => 'Class A foam enhances water’s ability to penetrate debris and cool deep-seated hot spots.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//12
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'What adjustment should be made when attacking high-rise fires from standpipe?',
    'choices'     => json_encode([
        'Increase pump pressure for standpipe friction loss',
        'Use smaller diameter hose',
        'Operate at fog nozzle pressures',
        'Reduce flow to 50 % capacity',
    ]),
    'answer'      => 'Increase pump pressure for standpipe friction loss',
    'explanation' => 'Standpipe systems have significant friction losses; pump must compensate to maintain nozzle pressure.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//13
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which factor MOST affects choice of hoseline diameter for exterior offensive firefighting?',
    'choices'     => json_encode([
        'Required flow rate',
        'Color of hose',
        'Weight of hose',
        'Manufacturer brand',
    ]),
    'answer'      => 'Required flow rate',
    'explanation' => 'The needed gpm dictates hose size to ensure adequate extinguishing capacity.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//14
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which action reduces thermal layering during interior attack?',
    'choices'     => json_encode([
        'Applying horizontal ventilation',
        'Opening doors widely',
        'Using straight streams',
        'Blocking vents',
    ]),
    'answer'      => 'Applying horizontal ventilation',
    'explanation' => 'Horizontal ventilation lowers heat layers and improves visibility along ceiling level.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//15
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which extinguishing agent is INEFFECTIVE on energized electrical fires?',
    'choices'     => json_encode([
        'Water',
        'CO₂',
        'Dry chemical',
        'Clean agent',
    ]),
    'answer'      => 'Water',
    'explanation' => 'Water conducts electricity and poses electrocution hazard on energized equipment.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//16
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which stream characteristic improves visibility by reducing smoke scattering?',
    'choices'     => json_encode([
        'Solid stream',
        'Fog stream',
        'Broken-stream',
        'Dual-stream',
    ]),
    'answer'      => 'Solid stream',
    'explanation' => 'Solid streams penetrate smoke with less scattering compared to fog patterns.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//17
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'What is the MAIN drawback of using high-expansion foam indoors?',
    'choices'     => json_encode([
        'Excessive water damage',
        'Reduced visibility',
        'High gas generation',
        'Structural overpressure',
    ]),
    'answer'      => 'Structural overpressure',
    'explanation' => 'High-expansion foam can create pressure that stresses building components in enclosed spaces.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//18
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which nozzle accessory allows draft of Class A foam concentrate?',
    'choices'     => json_encode([
        'Air-aspirating eductor',
        'Fog nozzle tip',
        'Locking ring',
        'Petticoat',
    ]),
    'answer'      => 'Air-aspirating eductor',
    'explanation' => 'An eductor attached to a nozzle uses venturi effect and air aspiration to mix foam.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//19
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'Which practice ensures correct nozzle pressure is maintained during flow?',
    'choices'     => json_encode([
        'Monitoring diffuser gauge',
        'Counting hose wraps',
        'Measuring temperature',
        'Adjusting locking ring',
    ]),
    'answer'      => 'Monitoring diffuser gauge',
    'explanation' => 'A pressure/diffuser gauge at the nozzle confirms and maintains target operating pressure.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//20
[
    'subject_id'  => 42,
    'part'        => 2,
    'question'    => 'What is the BEST sequence for applying an interior attack hoseline?',
    'choices'     => json_encode([
        'Charge line, stretch to door, shut off, enter, open nozzle',
        'Charge line, open nozzle, stretch to door, enter',
        'Stretch to door, charge line, open nozzle, enter',
        'Open nozzle, charge line, stretch to door, enter',
    ]),
    'answer'      => 'Charge line, stretch to door, shut off, enter, open nozzle',
    'explanation' => 'The line is charged outside, stretched to entry, shut off to advance safely, then opened inside.',
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
