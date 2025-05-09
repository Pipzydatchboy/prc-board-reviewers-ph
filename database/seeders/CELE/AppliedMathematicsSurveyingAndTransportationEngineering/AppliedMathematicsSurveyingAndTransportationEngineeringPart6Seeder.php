<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart6Seeder extends Seeder
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
        'part'       => 6,
        'question'   => 'In numerical differentiation, which finite difference formula is second-order accurate?',
        'choices'    => json_encode([
            'Central difference',
            'Forward difference',
            'Backward difference',
            'Five-point stencil',
        ]),
        'answer'     => 'Central difference',
        'explanation'=> 'Central difference error term is O(h^2), providing second-order accuracy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which element of traffic flow represents the time gap between successive vehicles?',
        'choices'    => json_encode([
            'Headway',
            'Gap',
            'Density',
            'Flow rate',
        ]),
        'answer'     => 'Headway',
        'explanation'=> 'Headway is the time between front bumpers of successive vehicles passing a point.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'In plane table surveying, which method plots measured angles from the occupied station to points?',
        'choices'    => json_encode([
            'Radiation method',
            'Intersection method',
            'Resection method',
            'Traversing method',
        ]),
        'answer'     => 'Radiation method',
        'explanation'=> 'Radiation plots points by drawing rays from the station at recorded angles.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which integration method is exact for polynomials up to the fifth degree over four intervals?',
        'choices'    => json_encode([
            'Boole’s rule',
            'Simpson’s 1/3 rule',
            'Simpson’s 3/8 rule',
            'Trapezoidal rule',
        ]),
        'answer'     => 'Boole’s rule',
        'explanation'=> 'Boole’s rule uses five points and integrates exactly up to degree five.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'What is Euler’s formula relating e^{iθ} to trigonometric functions?',
        'choices'    => json_encode([
            'e^{iθ} = cosθ + i sinθ',
            'e^{iθ} = cosθ - i sinθ',
            'e^{iθ} = sinθ + i cosθ',
            'e^{iθ} = sinθ - i cosθ',
        ]),
        'answer'     => 'e^{iθ} = cosθ + i sinθ',
        'explanation'=> 'Euler’s identity relates the complex exponential to sine and cosine.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which instruments compensate automatically for Earth’s curvature and refraction in long sight levels?',
        'choices'    => json_encode([
            'Automatic level',
            'Dumpy level',
            'Tilting level',
            'Digital level',
        ]),
        'answer'     => 'Automatic level',
        'explanation'=> 'Automatic levels have internal compensators for curvature and refraction.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which criterion determines stability of a numerical ODE solver for the test equation dy/dx = λy?',
        'choices'    => json_encode([
            'A-stability',
            'L-stability',
            'B-stability',
            'C-stability',
        ]),
        'answer'     => 'A-stability',
        'explanation'=> 'A-stable methods remain stable for all step sizes when solving dy/dx = λy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'What is the order of accuracy of the trapezoidal rule?',
        'choices'    => json_encode([
            'O(h^2)',
            'O(h)',
            'O(h^3)',
            'O(h^4)',
        ]),
        'answer'     => 'O(h^2)',
        'explanation'=> 'The trapezoidal rule has a global error of O(h^2) for sufficiently smooth functions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which polynomial interpolation minimizes the maximum error over an interval?',
        'choices'    => json_encode([
            'Chebyshev interpolation',
            'Lagrange interpolation',
            'Newton interpolation',
            'Hermite interpolation',
        ]),
        'answer'     => 'Chebyshev interpolation',
        'explanation'=> 'Choosing nodes at Chebyshev points reduces the maximum interpolation error.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'In traffic signal timing, what does effective green time represent?',
        'choices'    => json_encode([
            'Time during which vehicles can pass the intersection',
            'Total cycle time',
            'All-red interval',
            'Lost time',
        ]),
        'answer'     => 'Time during which vehicles can pass the intersection',
        'explanation'=> 'Effective green excludes start-up delays and clearance intervals.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'What is the primary purpose of least squares adjustment in leveling networks?',
        'choices'    => json_encode([
            'Optimize point elevations to minimize measurement errors',
            'Compute area under curves',
            'Design highway alignments',
            'Calculate structural loads',
        ]),
        'answer'     => 'Optimize point elevations to minimize measurement errors',
        'explanation'=> 'Least squares distributes leveling misclosure to achieve a best-fit elevation model.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which statistical measure indicates the spread of a dataset around its mean?',
        'choices'    => json_encode([
            'Standard deviation',
            'Mean deviation',
            'Mode',
            'Skewness',
        ]),
        'answer'     => 'Standard deviation',
        'explanation'=> 'Standard deviation quantifies the average deviation of values from the mean.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'In open channel flow, which non-dimensional number indicates the flow regime in terms of inertial and gravitational forces?',
        'choices'    => json_encode([
            'Froude number',
            'Reynolds number',
            'Mach number',
            'Weber number',
        ]),
        'answer'     => 'Froude number',
        'explanation'=> 'Froude number distinguishes between subcritical and supercritical flow regimes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which convergence criterion is commonly used for Newton-Raphson root finding?',
        'choices'    => json_encode([
            '|x_{n+1} - x_n| < tolerance',
            '|f(x_n)| < tolerance',
            '|f\'(x_n)| > 1',
            'Max iterations reached',
        ]),
        'answer'     => '|x_{n+1} - x_n| < tolerance',
        'explanation'=> 'Iteration stops when successive approximations differ by less than the tolerance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which adjustment method in surveying uses both least squares and full network connectivity?',
        'choices'    => json_encode([
            'Network least squares adjustment',
            'Bowditch adjustment',
            'Transit rule',
            'Compass rule',
        ]),
        'answer'     => 'Network least squares adjustment',
        'explanation'=> 'This method adjusts all observations simultaneously across the network for best-fit positions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'In traffic engineering, which term defines the maximum stable flow rate under prevailing conditions?',
        'choices'    => json_encode([
            'Capacity',
            'Potential flow',
            'Jam density',
            'Free-flow speed',
        ]),
        'answer'     => 'Capacity',
        'explanation'=> 'Capacity is the highest sustainable hourly flow rate per lane.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which rule requires dividing an interval into an even number of subintervals for Simpson’s 1/3 rule?',
        'choices'    => json_encode([
            'An even number',
            'An odd number',
            'Any number',
            'Prime number',
        ]),
        'answer'     => 'An even number',
        'explanation'=> 'Simpson’s 1/3 rule applies parabolic interpolation over pairs of intervals, so an even count is needed.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'In GNSS positioning, which approach reduces ionospheric delay for improved accuracy?',
        'choices'    => json_encode([
            'Dual-frequency measurements',
            'Single-frequency pseudorange',
            'Geoid modeling',
            'Satellite ephemeris corrections',
        ]),
        'answer'     => 'Dual-frequency measurements',
        'explanation'=> 'Using both L1 and L2 frequencies allows estimation and elimination of ionospheric delay.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which statistical distribution is commonly used for modeling time-to-failure data in reliability analysis?',
        'choices'    => json_encode([
            'Weibull distribution',
            'Normal distribution',
            'Exponential distribution',
            'Log-normal distribution',
        ]),
        'answer'     => 'Weibull distribution',
        'explanation'=> 'The Weibull distribution can model increasing or decreasing failure rates via its shape parameter.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 6,
        'question'   => 'Which polynomial interpolation method incorporates derivative information at nodes for improved accuracy?',
        'choices'    => json_encode([
            'Hermite interpolation',
            'Lagrange interpolation',
            'Newton interpolation',
            'Spline interpolation',
        ]),
        'answer'     => 'Hermite interpolation',
        'explanation'=> 'Hermite interpolation uses both function values and derivatives for a smoother fit.',
        'created_at' => $now,
        'updated_at' => $now
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
