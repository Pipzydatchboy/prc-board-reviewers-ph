<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart4Seeder extends Seeder
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

//1
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which Republic Act is known as the Land Transportation and Traffic Code of the Philippines?',
    'choices'     => json_encode([
        'RA 4136',
        'RA 9165',
        'RA 10175',
        'RA 10586',
    ]),
    'answer'      => 'RA 4136',
    'explanation' => 'RA 4136, enacted in 1964, codifies traffic rules, vehicle registration, and licensing.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'What is the standard speed limit in urban areas unless otherwise posted under the Land Transportation Code?',
    'choices'     => json_encode([
        '30 km/h',
        '50 km/h',
        '60 km/h',
        '40 km/h',
    ]),
    'answer'      => '50 km/h',
    'explanation' => 'Under RA 4136, the default urban speed limit is 50 kilometers per hour unless posted otherwise.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which shape and color combination indicates a warning sign in traffic management?',
    'choices'     => json_encode([
        'Yellow diamond',
        'Red octagon',
        'Blue rectangle',
        'Green circle',
    ]),
    'answer'      => 'Yellow diamond',
    'explanation' => 'Warning signs are typically yellow diamonds to alert drivers of hazards ahead.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'What device is used to record a vehicle’s speed electronically for accident reconstruction?',
    'choices'     => json_encode([
        'Tachograph',
        'Speedometer',
        'GPS logger',
        'Event data recorder',
    ]),
    'answer'      => 'Event data recorder',
    'explanation' => 'Accident data recorders, or EDRs, capture vehicle parameters including speed at impact.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which type of tire mark results from wheels locked by sudden braking?',
    'choices'     => json_encode([
        'Skid mark',
        'Yaw mark',
        'Gap mark',
        'Accel mark',
    ]),
    'answer'      => 'Skid mark',
    'explanation' => 'Skid marks are dark, linear impressions caused by locked wheels sliding over the surface.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which formula is commonly used to estimate vehicle speed from skid mark length?',
    'choices'     => json_encode([
        'v = sqrt(2 * f * d * g)',
        'v = d / t',
        'v = (m * a) / F',
        'v = (h * g) / 2',
    ]),
    'answer'      => 'v = sqrt(2 * f * d * g)',
    'explanation' => 'This formula uses friction coefficient (f), skid distance (d), and gravity (g) to estimate speed.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'What legal doctrine allows police to stop and inspect a vehicle if fleeing from a law enforcement relay?',
    'choices'     => json_encode([
        'Hot pursuit',
        'Plain view',
        'Search incident to arrest',
        'Exigent circumstances',
    ]),
    'answer'      => 'Hot pursuit',
    'explanation' => 'Hot pursuit permits warrantless stops of vehicles escaping from law enforcement.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which classification describes an accident involving only property damage?',
    'choices'     => json_encode([
        'Cancelada',
        'Crash with injuries',
        'Fatal accident',
        'Hit and run',
    ]),
    'answer'      => 'Cancelada',
    'explanation' => 'Under PNP classification, "Cancelada" refers to accidents with only property damage.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which document is required to be filled out at the scene for every traffic accident?',
    'choices'     => json_encode([
        'Accident Investigation Report',
        'Incident blotter',
        'Affidavit of driver',
        'Traffic citation',
    ]),
    'answer'      => 'Accident Investigation Report',
    'explanation' => 'The AIPCR (Accident Investigation and Prevention Crash Report) is mandated for all reportable accidents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which concept refers to the last opportunity a driver had to avoid a collision?',
    'choices'     => json_encode([
        'Last clear chance',
        'Squish point',
        'Critical point',
        'Braking threshold',
    ]),
    'answer'      => 'Last clear chance',
    'explanation' => 'It is the final moment when a driver could have prevented the accident by evasive action.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'What is the blood alcohol concentration legal limit for drivers under RA 10586?',
    'choices'     => json_encode([
        '0.05%',
        '0.08%',
        '0.02%',
        '0.10%',
    ]),
    'answer'      => '0.05%',
    'explanation' => 'RA 10586 sets the BAC limit at 0.05% for safe driving under the influence of alcohol.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which tool is used to measure skid mark distances accurately at an accident scene?',
    'choices'     => json_encode([
        'Measuring wheel',
        'Laser rangefinder',
        'Ruler',
        'Tape measure',
    ]),
    'answer'      => 'Measuring wheel',
    'explanation' => 'A measuring wheel provides precise distance measurements over uneven road surfaces.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which sign indicates that overtaking is prohibited on a two-way road?',
    'choices'     => json_encode([
        'No overtaking sign',
        'No parking sign',
        'Speed limit sign',
        'Stop sign',
    ]),
    'answer'      => 'No overtaking sign',
    'explanation' => 'The no-overtaking sign is circular with two cars, red border indicating prohibition.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which traffic control device physically directs vehicles by means of light signals?',
    'choices'     => json_encode([
        'Traffic light signal',
        'Stop sign',
        'Speed bump',
        'Cones',
    ]),
    'answer'      => 'Traffic light signal',
    'explanation' => 'Traffic lights use red, yellow, and green signals to control vehicle flow.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which PNP function unit is primarily responsible for traffic enforcement and accident investigation?',
    'choices'     => json_encode([
        'Traffic Management Group',
        'Crime Laboratory',
        'Intelligence Division',
        'Criminal Investigation Unit',
    ]),
    'answer'      => 'Traffic Management Group',
    'explanation' => 'The PNP Traffic Management Group oversees traffic laws, accident investigation, and road safety.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which section of an accident report details environmental and road conditions?',
    'choices'     => json_encode([
        'Scene description',
        'Driver statement',
        'Witness accounts',
        'Vehicle damage summary',
    ]),
    'answer'      => 'Scene description',
    'explanation' => 'The scene description captures weather, lighting, road surface, and signage details.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which analysis uses the angles of yaw marks to determine the speed of a vehicle?',
    'choices'     => json_encode([
        'Yaw mark analysis',
        'Skid mark estimation',
        'Gap mark computation',
        'Sliced mark method',
    ]),
    'answer'      => 'Yaw mark analysis',
    'explanation' => 'Yaw marks curvature and entry angle correlate with vehicle speed and direction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which legal concept allows admittance of real-time dashcam footage as evidence without a warrant?',
    'choices'     => json_encode([
        'Plain view doctrine',
        'Exclusionary rule',
        'Hot pursuit',
        'Consent search',
    ]),
    'answer'      => 'Plain view doctrine',
    'explanation' => 'If officers lawfully view footage in plain sight, it may be seized without a warrant.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which RA requires private vehicles to undergo periodic emission testing for environmental compliance?',
    'choices'     => json_encode([
        'RA 8749',
        'RA 9003',
        'RA 9275',
        'RA 9165',
    ]),
    'answer'      => 'RA 8749',
    'explanation' => 'RA 8749, the Clean Air Act, mandates emission testing to reduce vehicle pollution.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 4,
    'question'    => 'Which control technique uses inflatable barriers to slow down traffic at a scene?',
    'choices'     => json_encode([
        'Air cushion speed breakers',
        'Concrete dividers',
        'Metal spikes',
        'Chicanes',
    ]),
    'answer'      => 'Air cushion speed breakers',
    'explanation' => 'Inflatable speed bumps can be deployed quickly to reduce vehicle speed safely.',
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
