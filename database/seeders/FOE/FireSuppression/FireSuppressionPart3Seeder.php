<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'Which fire flow test method uses a pitot gauge to measure nozzle pressure and back-calculate gpm?',
        'choices'     => json_encode([
            'Hydrant flow test',
            'Static flow test',
            'Pitot flow test',
            'Residual flow test',
        ]),
        'answer'      => 'Pitot flow test',
        'explanation' => 'Pitot readings at the nozzle plus calibration allow calculation of flowrate in gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'In NFPA pump testing, the acceptance pressure is measured at which location?',
        'choices'     => json_encode([
            'Discharge gauge',
            'Intake gauge',
            'Pump panel gauge',
            'Nozzle gauge',
        ]),
        'answer'      => 'Pump panel gauge',
        'explanation' => 'NFPA requires measuring discharge pressure at the pump panel for accurate test conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which valve type is COMMONLY used to control multiple hoselines from a single hydrant?',
        'choices'     => json_encode([
            'Wye valve',
            'Gate valve',
            'Butterfly valve',
            'Ball valve',
        ]),
        'answer'      => 'Wye valve',
        'explanation' => 'A wye splits one inlet to two outlets, allowing independent control of two hoselines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'What is the PRIMARY disadvantage of using a straight stream on a class A seat fire?',
        'choices'     => json_encode([
            'Lacks cooling of surrounding gases',
            'Creates excessive steam',
            'Spreads burning debris',
            'Requires higher pump pressure',
        ]),
        'answer'      => 'Lacks cooling of surrounding gases',
        'explanation' => 'Straight streams don’t contact hot gases and overhead layers, limiting cooling effect.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'During a static hydrant flow test, what does the residual pressure represent?',
        'choices'     => json_encode([
            'Pressure under flow',
            'Pressure with no flow',
            'Pump discharge pressure',
            'Nozzle operating pressure',
        ]),
        'answer'      => 'Pressure under flow',
        'explanation' => 'Residual pressure is the system pressure measured while water is flowing during the test.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which nozzle is BEST for fire stream reach and minimal air entrainment?',
        'choices'     => json_encode([
            'Smooth bore',
            'Adjustable fog',
            'Piercing nozzle',
            'Broken-stream nozzle',
        ]),
        'answer'      => 'Smooth bore',
        'explanation' => 'Smooth-bore nozzles produce a solid stream with high coherence and maximum reach.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'What is the recommended minimum flow for aerial ladder master streams?',
        'choices'     => json_encode([
            '500 gpm',
            '350 gpm',
            '250 gpm',
            '800 gpm',
        ]),
        'answer'      => '500 gpm',
        'explanation' => 'NFPA recommends at least 500 gpm for master streams to ensure effective application.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which factor MOST influences friction loss in hose lines?',
        'choices'     => json_encode([
            'Hose diameter',
            'Hose color',
            'Nozzle type',
            'Ambient temperature',
        ]),
        'answer'      => 'Hose diameter',
        'explanation' => 'Smaller diameter increases friction loss dramatically; flowrate is secondary.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which firefighting agent is SOLUBLE in water and forms a film on hydrocarbon fuels?',
        'choices'     => json_encode([
            'AFFF',
            'Class A foam',
            'Dry chemical',
            'Wetting agent',
        ]),
        'answer'      => 'AFFF',
        'explanation' => 'AFFF is water-soluble and creates an aqueous film to seal fuel surfaces and prevent vapors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'What is the key advantage of using balanced-pressure foam proportioner?',
        'choices'     => json_encode([
            'Consistent foam ratio at varying flows',
            'Lower initial cost',
            'No moving parts',
            'Requires no calibration',
        ]),
        'answer'      => 'Consistent foam ratio at varying flows',
        'explanation' => 'Balanced-pressure devices maintain correct proportioning across a range of discharge rates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which tool is used to measure residual hydrant pressure during flow tests?',
        'choices'     => json_encode([
            'Gauge stick',
            'Pitot gauge',
            'Household gauge',
            'Thermocouple',
        ]),
        'answer'      => 'Pitot gauge',
        'explanation' => 'A pitot gauge measures nozzle pressure; combined with nozzle coefficient, it yields flow and residual pressures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which spray pattern is LEAST effective at penetrating deep-seated Class A fires?',
        'choices'     => json_encode([
            'Wide fog',
            'Direct stream',
            'Broken-stream',
            'Narrow fog',
        ]),
        'answer'      => 'Wide fog',
        'explanation' => 'Wide fog dissipates energy quickly and lacks the reach to penetrate into burning materials.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'During a residual pressure test, what does an increased residual indicate?',
        'choices'     => json_encode([
            'Adequate supply and low demand',
            'High demand',
            'Leaky hydrant',
            'Pump failure',
        ]),
        'answer'      => 'Adequate supply and low demand',
        'explanation' => 'Higher residual means system can maintain pressure under current flow, indicating capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which location is MOST ideal for establishing a fixed water supply operation?',
        'choices'     => json_encode([
            'At hydrant nearest fire building',
            'At fire engine bay',
            'At fire station',
            'At exposure building',
        ]),
        'answer'      => 'At hydrant nearest fire building',
        'explanation' => 'Proximity minimizes hose lay length and maximizes friction loss efficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which agent is MOST appropriate for extinguishing energized electrical fires?',
        'choices'     => json_encode([
            'Dry chemical',
            'Water',
            'Class A foam',
            'Water mist',
        ]),
        'answer'      => 'Dry chemical',
        'explanation' => 'Dry chemical is non-conductive and effectively interrupts combustion chain reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'What is the PRIMARY benefit of using radio-tagged nozzles on hoselines?',
        'choices'     => json_encode([
            'Track hoseline location in smoke',
            'Measure flow remotely',
            'Reduce nozzle weight',
            'Increase water reach',
        ]),
        'answer'      => 'Track hoseline location in smoke',
        'explanation' => 'Radio tags allow command to monitor hoseline progress and firefighter positions in low visibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which elevation change requires adding 0.434 psi per foot to pump pressure?',
        'choices'     => json_encode([
            'Uphill hose lay',
            'Downhill hose lay',
            'Level lay',
            'Vertical standpipe',
        ]),
        'answer'      => 'Uphill hose lay',
        'explanation' => 'For every foot uphill, pump adds ~0.434 psi to overcome elevation head.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which nozzle accessory prevents nozzle reaction from kicking back?',
        'choices'     => json_encode([
            'Peri–jet attachment',
            'Fog diffuser',
            'Stream shaper',
            'Petticoat',
        ]),
        'answer'      => 'Peri–jet attachment',
        'explanation' => 'A peri-jet creates aerated stream reducing reaction forces at the nozzle.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which factor MOST affects nozzle reaction force?',
        'choices'     => json_encode([  
            'Flowrate',
            'Hose length',
            'Ambient pressure',  
            'Nozzle color', 
        ]),
        'answer'      => 'Flowrate',
        'explanation' => 'Higher gpm produces greater nozzle reaction; pressure has less effect than flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 3,
        'question'    => 'Which method of foam application provides the highest expansion ratio?',
        'choices'     => json_encode([
            'High-expansion foam',
            'Air-aspirating nozzle',
            'In-line eductor',
            'Balanced-pressure pump',
        ]),
        'answer'      => 'High-expansion foam',
        'explanation' => 'High-expansion systems generate foam ratios up to 1000:1, far exceeding other methods.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
