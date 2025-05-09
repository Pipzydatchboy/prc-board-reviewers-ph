<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart2Seeder extends Seeder
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
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'What is the least squares adjustment objective in traverse computation?',
        'choices'    => json_encode([
            'Minimize sum of squared residuals',
            'Equalize forward and backward bearings',
            'Distribute misclosure proportionally',
            'Maximize traverse area',
        ]),
        'answer'     => 'Minimize sum of squared residuals',
        'explanation'=> 'Least squares finds corrections that minimize the sum of squared measurement errors.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'In leveled differential leveling, what instrument constant corrects systematic error?',
        'choices'    => json_encode([
            'Collimation error constant',
            'Refraction constant',
            'Temperature constant',
            'Earth curvature constant',
        ]),
        'answer'     => 'Collimation error constant',
        'explanation'=> 'Collimation error arises from instrument line misalignment and is corrected via calibration.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'Which projection uses a secant transverse cylinder for small-area surveys?',
        'choices'    => json_encode([
            'Transverse Mercator',
            'Lambert conformal conic',
            'Albers equal-area',
            'Oblique stereographic',
        ]),
        'answer'     => 'Transverse Mercator',
        'explanation'=> 'Transverse Mercator projects a narrow east-west zone minimizing distortion in small areas.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'In highway capacity analysis, what does P represent in the Highway Capacity Manual formula for passenger car equivalents?',
        'choices'    => json_encode([
            'Passenger car equivalence factor',
            'Parking ratio',
            'Percent grade',
            'Peak hour factor',
        ]),
        'answer'     => 'Passenger car equivalence factor',
        'explanation'=> 'PCE translates heavy vehicles into equivalent passenger cars for capacity computation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'What is the approximate running time range for a theodolite sighting cycle?',
        'choices'    => json_encode([
            '2–3 minutes',
            '10–15 seconds',
            '30–40 minutes',
            '20–30 seconds',
        ]),
        'answer'     => '2–3 minutes',
        'explanation'=> 'A single complete theodolite setup and sight typically takes 2–3 minutes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'In sample survey design, what is the purpose of stratification?',
        'choices'    => json_encode([
            'Improve estimate precision',
            'Reduce sample size',
            'Simplify data collection',
            'Ensure randomness',
        ]),
        'answer'     => 'Improve estimate precision',
        'explanation'=> 'Stratification divides population into homogeneous groups to reduce variance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'Which method is used to compute earthwork by dividing the prism into triangular sections?',
        'choices'    => json_encode([
            'Triangulation method',
            'Cross-section method',
            'End-area method',
            'Prismoidal method',
        ]),
        'answer'     => 'Prismoidal method',
        'explanation'=> 'Prismoidal formula integrates end areas and mid-area for accurate volume.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'In queuing theory, which practice models arrival rates as a Poisson process and service times as exponential?',
        'choices'    => json_encode([
            'M/M/1 queue',
            'M/D/1 queue',
            'G/G/1 queue',
            'D/M/1 queue',
        ]),
        'answer'     => 'M/M/1 queue',
        'explanation'=> 'M/M/1 assumes Markovian arrivals and service with single server.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'Which error is eliminated by double leveling?',
        'choices'    => json_encode([
            'Collimation error',
            'Refraction error',
            'Earth curvature',
            'Thermometric error',
        ]),
        'answer'     => 'Collimation error',
        'explanation'=> 'Double leveling reverses instrument face eliminating collimation misreading.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'The conversion factor from metric tons to cubic meters for granular material with specific gravity of 2.65 and void ratio of 0.4 is approximately:',
        'choices'    => json_encode([
            '0.35 m³/t',
            '0.5 m³/t',
            '0.25 m³/t',
            '0.75 m³/t',
        ]),
        'answer'     => '0.35 m³/t',
        'explanation'=> 'Volume = mass/(ρs(1–n)), 1/(2.65*1000*(1–0.29))≈0.35.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'In ring and tube tests for soil permeability, which factor is kept constant?',
        'choices'    => json_encode([
            'Hydraulic head',
            'Permeant viscosity',
            'Temperature',
            'Soil gradation',
        ]),
        'answer'     => 'Hydraulic head',
        'explanation'=> 'Tests control head difference to measure flow rate through sample.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'   => 'Which equation describes one-dimensional steady uniform open channel flow?',
        'choices'    => json_encode([
            'Manning’s equation',
            'Bernoulli’s equation',
            'Continuity equation',
            'Weber’s equation',
        ]),
        'answer'     => 'Manning’s equation',
        'explanation'=> 'Manning relates flow rate to channel geometry, slope, and roughness.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'Which statistical distribution models the annual maximum flood series for hydrologic design?',
        'choices'     => json_encode([
            'Gumbel distribution',
            'Normal distribution',
            'Exponential distribution',
            'Poisson distribution',
        ]),
        'answer'      => 'Gumbel distribution',
        'explanation' => 'Gumbel is used for extreme value analysis of flood peaks.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'In roadway drainage design, the Rational Method estimates peak runoff using Q=CiA. What does C represent?',
        'choices'     => json_encode([
            'Runoff coefficient',
            'Rainfall intensity',
            'Catchment area',
            'Channel slope',
        ]),
        'answer'      => 'Runoff coefficient',
        'explanation' => 'C is dimensionless factor representing fraction of rainfall that becomes runoff.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'Which surveying instrument direct the line of sight horizontally while leveling vertically?',
        'choices'     => json_encode([
            'Automatic level',
            'Clinometer',
            'Total station',
            'Theodolite',
        ]),
        'answer'      => 'Theodolite',
        'explanation' => 'Theodolite measures both horizontal plane and vertical angles accurately.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'In numerical integration, which rule is exact for polynomials up to third degree?',
        'choices'     => json_encode([
            'Simpson’s rule',
            'Trapezoidal rule',
            'Midpoint rule',
            'Rectangle rule',
        ]),
        'answer'      => 'Simpson’s rule',
        'explanation' => 'Simpson’s integrates exactly up to cubic functions over each pair of intervals.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'Which traffic flow parameter is defined as vehicles per hour per lane?',
        'choices'     => json_encode([
            'Flow rate',
            'Density',
            'Speed',
            'Headway',
        ]),
        'answer'      => 'Flow rate',
        'explanation' => 'Flow rate represents hourly traffic volume per lane.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'Which method corrects traverse coordinates for misclosure by adjusting all points except the starting one?',
        'choices'     => json_encode([
            'Radiation adjustment',
            'Bowditch adjustment',
            'Transit rule',
            'Omitted measurements',
        ]),
        'answer'      => 'Radiation adjustment',
        'explanation' => 'Radiation or angular adjustment distributes bearing errors only, keeping start fixed.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'In vehicle capacity, which factor accounts for variability in traffic flow during peak hour?',
        'choices'     => json_encode([
            'Peak-hour factor',
            'Directional distribution factor',
            'Lane utilization factor',
            'Vehicle composition factor',
        ]),
        'answer'      => 'Peak-hour factor',
        'explanation' => 'Peak-hour factor adjusts design hour volume to peak 15-min flow variability.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 2,
        'question'    => 'What is the principal of three-point problem in triangulation?',
        'choices'     => json_encode([
            'Determining position by intersecting two angles',
            'Measuring three distances to known points',
            'Measuring two angles and one distance',
            'Using three collimation readings',
        ]),
        'answer'      => 'Measuring two angles and one distance',
        'explanation' => 'Three-point problem uses two known base vertices and one measured angle-distance pair to locate a point.',
        'created_at'  => $now,
        'updated_at'  => $now
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
