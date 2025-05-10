<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which action should be taken FIRST when a hoseline becomes kinked under pressure?',
        'choices'     => json_encode([
            'Shut down the nozzle',
            'Charge another line',
            'Pull the kink out',
            'Increase pump pressure',
        ]),
        'answer'      => 'Shut down the nozzle',
        'explanation' => 'Always shut off flow before attempting to clear a kink to prevent injury and hose damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'What is the MOST appropriate device to measure flow rate in a standpipe system?',
        'choices'     => json_encode([
            'In-line flowmeter',
            'Pitot gauge',
            'Pressure gauge',
            'Thermometer',
        ]),
        'answer'      => 'In-line flowmeter',
        'explanation' => 'In-line flowmeters directly measure volumetric flow, essential for standpipe operations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which nozzle selection BEST minimizes steam production when cooling hot gases?',
        'choices'     => json_encode([
            'Solid stream',
            'Wide fog',
            'Broken-stream',
            'Narrow fog',
        ]),
        'answer'      => 'Narrow fog',
        'explanation' => 'Narrow fog provides fine droplets and controlled cooling with reduced steam volume.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'During a pump test, which reading confirms intake seal integrity?',
        'choices'     => json_encode([
            'Steady intake vacuum',
            'High discharge pressure',
            'Constant flow',
            'Stable nozzle reaction',
        ]),
        'answer'      => 'Steady intake vacuum',
        'explanation' => 'A stable vacuum indicates that no air is leaking into the pump from the intake side.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which technique is recommended for fire attack on class K kitchen fires?',
        'choices'     => json_encode([
            'Wet chemical spray',
            'AFFF application',
            'Class A foam',
            'Dry powder',
        ]),
        'answer'      => 'Wet chemical spray',
        'explanation' => 'Wet chemical agents form a soapy foam blanket and saponify cooking oils to extinguish class K fires.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'What is the primary purpose of fog spray application through closed doors (“penciling”)?',
        'choices'     => json_encode([
            'Cool gases before entry',
            'Flood the room',
            'Wash the door',
            'Test foam concentration',
        ]),
        'answer'      => 'Cool gases before entry',
        'explanation' => 'Penciling through openings cools the hot layer, improving conditions prior to entry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which apparatus feature enables continuous foam proportioning at variable flow rates?',
        'choices'     => json_encode([
            'Balanced-pressure proportioner',
            'Fixed orifice eductor',
            'Air-aspirating nozzle',
            'Manual injector',
        ]),
        'answer'      => 'Balanced-pressure proportioner',
        'explanation' => 'Balanced-pressure systems maintain the correct concentrate ratio across a range of flows.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'When charging a pre-connect line inside, the nozzle should be opened at what point?',
        'choices'     => json_encode([
            'Just inside the doorway',
            'At the engine',
            'At the hydrant',
            'In the apparatus bay',
        ]),
        'answer'      => 'Just inside the doorway',
        'explanation' => 'Charging just inside prevents pressure hitting firefighters outside and keeps line under control.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which tool is BEST for clearing obstructions from inside standpipe outlets?',
        'choices'     => json_encode([
            'Pipe wrench',
            'Bolt cutters',
            'Pike pole',
            'Hydrant key',
        ]),
        'answer'      => 'Pipe wrench',
        'explanation' => 'A pipe wrench can remove caps and clear debris from outlets to ensure flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which practice MOST reduces nozzle reaction when operating a 2½-inch line?',
        'choices'     => json_encode([
            'Use a pistol-grip nozzle',
            'Increase flow rate',
            'Shorten hose length',
            'Switch to solid stream',
        ]),
        'answer'      => 'Use a pistol-grip nozzle',
        'explanation' => 'Pistol-grip handles allow one-handed control and reduce the felt reaction force.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'What is the BEST method to test foam concentrate before incident use?',
        'choices'     => json_encode([
            'Sample and drain test',
            'Visual inspection',
            'Smell test',
            'pH test',
        ]),
        'answer'      => 'Sample and drain test',
        'explanation' => 'Drain time and expansion ratios in a graduated cylinder confirm concentrate quality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which hoseline stretch is MOST appropriate for high-rise interior attack?',
        'choices'     => json_encode([
            'Standpipe pre-connect',
            'Supply line',
            'Deck gun line',
            'Exposure line',
        ]),
        'answer'      => 'Standpipe pre-connect',
        'explanation' => 'Pre-connected standpipe lines allow immediate interior deployment without adding poundage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which action BEST prevents heat damage to handlines during prolonged exterior punch streams?',
        'choices'     => json_encode([
            'Alternate lines periodically',
            'Reduce flow continuously',
            'Use dry chemical',
            'Float stream above fire',
        ]),
        'answer'      => 'Alternate lines periodically',
        'explanation' => 'Cycling lines prevents overheating of a single hose and nozzle assembly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which nozzle accessory reduces potential for flash burns from steam?',
        'choices'     => json_encode([
            'Steam-conversion attachment',
            'Locking ring',
            'Petticoat',
            'Flowmeter',
        ]),
        'answer'      => 'Steam-conversion attachment',
        'explanation' => 'These attachments break droplets to maximize steam conversion and reduce radiant heat.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'What is the PRIMARY benefit of a foot-operated primer on a portable pump?',
        'choices'     => json_encode([
            'Hands-free priming',
            'Higher vacuum',
            'Faster flow',
            'Lower pressure',
        ]),
        'answer'      => 'Hands-free priming',
        'explanation' => 'Foot-operated primers allow the operator to prime the pump while maintaining other controls.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which factor MOST influences nozzle selection for tunnel firefighting?',
        'choices'     => json_encode([
            'Visibility conditions',
            'Hose color',
            'Pump RPM',
            'Foam type',
        ]),
        'answer'      => 'Visibility conditions',
        'explanation' => 'Restricted visibility in tunnels dictates use of fog or narrow fog for improved sight lines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which tool is MOST effective at clearing debris from sprinkler heads during fire attack?',
        'choices'     => json_encode([
            'Sprinkler wrench',
            'Pike pole',
            'Halligan bar',
            'Bolt cutter',
        ]),
        'answer'      => 'Sprinkler wrench',
        'explanation' => 'Sprinkler wrenches are designed to remove covers and clear obstructions without damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which action BEST ensures accurate hose friction loss calculations?',
        'choices'     => json_encode([
            'Use correct hose diameter and length',
            'Estimate visually',
            'Ignore minor kinks',
            'Assume standard conditions',
        ]),
        'answer'      => 'Use correct hose diameter and length',
        'explanation' => 'Accurate friction loss depends on precise hose size and length in computations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which nozzle setting is LEAST effective for interior search hose movements?',
        'choices'     => json_encode([
            'Wide fog',
            'Solid stream',
            'Pencil',
            'Broken-stream',
        ]),
        'answer'      => 'Wide fog',
        'explanation' => 'Wide fog scatters and hinders hose handling during search; narrower patterns track better.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 10,
        'question'    => 'Which maintenance practice MOST prolongs service life of fog nozzles?',
        'choices'     => json_encode([
            'Flush and drain after use',
            'Store charged',
            'Keep in direct sunlight',
            'Use only on class B fires',
        ]),
        'answer'      => 'Flush and drain after use',
        'explanation' => 'Removing internal moisture and debris prevents corrosion and blockage of fog nozzles.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
