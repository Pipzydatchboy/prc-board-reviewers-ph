<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart7Seeder extends Seeder
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
        'part'       => 7,
        'question'   => 'What is the condition for convergence of the Jacobi iterative method for solving Ax=b?',
        'choices'    => json_encode([
            'Diagonal dominance of A',
            'Positive definiteness of A',
            'Symmetry of A',
            'Sparsity of A',
        ]),
        'answer'     => 'Diagonal dominance of A',
        'explanation'=> 'Jacobi converges if the coefficient matrix is strictly diagonally dominant.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In a closed traverse, what geometric closure error tolerance is acceptable in precise surveying?',
        'choices'    => json_encode([
            '1:10,000 of perimeter',
            '1:1,000 of perimeter',
            '1:5,000 of perimeter',
            '1:100 of perimeter',
        ]),
        'answer'     => '1:10,000 of perimeter',
        'explanation'=> 'High precision traverses allow closure errors up to one unit in 10,000 of the perimeter.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which method is used to compute the least squares adjustment of a leveling line?',
        'choices'    => json_encode([
            'Two-peg test',
            'Bowditch rule',
            'Transit rule',
            'Weighting by inverse variance',
        ]),
        'answer'     => 'Weighting by inverse variance',
        'explanation'=> 'Least squares distributes misclosure using weights inversely proportional to measurement variances.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In numerical integration, which method uses both trapezoidal and Simpson’s rules adaptively?',
        'choices'    => json_encode([
            'Adaptive quadrature',
            'Gaussian quadrature',
            'Romberg integration',
            'Newton-Cotes',
        ]),
        'answer'     => 'Adaptive quadrature',
        'explanation'=> 'Adaptive quadrature refines subintervals based on error estimates using trapezoidal/Simpson’s.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'What is the primary advantage of using total stations over conventional theodolites?',
        'choices'    => json_encode([
            'Integrated distance measurement',
            'Higher optical magnification',
            'Battery life',
            'Mechanical simplicity',
        ]),
        'answer'     => 'Integrated distance measurement',
        'explanation'=> 'Total stations combine angle and electronic distance measurements in one instrument.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which curve fitting method minimizes the sum of absolute deviations?',
        'choices'    => json_encode([
            'Least absolute deviations',
            'Least squares',
            'Polynomial regression',
            'Spline interpolation',
        ]),
        'answer'     => 'Least absolute deviations',
        'explanation'=> 'Minimizes sum of absolute errors, robust to outliers compared to least squares.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In gravimetric leveling, which correction is applied for tidal variations?',
        'choices'    => json_encode([
            'Tidal correction',
            'Temperature correction',
            'Pressure correction',
            'Humidity correction',
        ]),
        'answer'     => 'Tidal correction',
        'explanation'=> 'Compensates for sea-level changes due to tides when using tide gauges as reference.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which numerical method is unconditionally stable for stiff ODE problems?',
        'choices'    => json_encode([
            'Backward Euler',
            'RK4',
            'Forward Euler',
            'Midpoint rule',
        ]),
        'answer'     => 'Backward Euler',
        'explanation'=> 'Implicit Backward Euler is A-stable and suitable for stiff equations.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In traffic flow, what does the Fundamental Diagram relate?',
        'choices'    => json_encode([
            'Flow, density, and speed',
            'Flow and travel time',
            'Speed and impedance',
            'Density and headway',
        ]),
        'answer'     => 'Flow, density, and speed',
        'explanation'=> 'The Fundamental Diagram depicts relationships among q, k, and v.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which algorithm is used to detect and remove outliers in survey observations?',
        'choices'    => json_encode([
            'Blunder detection',
            'Least squares adjustment',
            'Bowditch rule',
            'Transit rule',
        ]),
        'answer'     => 'Blunder detection',
        'explanation'=> 'Statistical tests identify gross errors before final adjustment.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In time series analysis, which technique decomposes data into trend, seasonal, and residual components?',
        'choices'    => json_encode([
            'Classical decomposition',
            'Fourier analysis',
            'Wavelet transform',
            'Regression analysis',
        ]),
        'answer'     => 'Classical decomposition',
        'explanation'=> 'Separates time series into additive or multiplicative components.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which survey technique uses GPS and inertial measurements together?',
        'choices'    => json_encode([
            'GNSS/INS integration',
            'Total station surveying',
            'Leveling',
            'Photogrammetry',
        ]),
        'answer'     => 'GNSS/INS integration',
        'explanation'=> 'Combines GNSS positioning with inertial sensors for continuous attitude and position.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which interpolation method ensures smooth first derivative continuity across intervals?',
        'choices'    => json_encode([
            'Cubic spline interpolation',
            'Linear interpolation',
            'Lagrange interpolation',
            'Hermite interpolation',
        ]),
        'answer'     => 'Cubic spline interpolation',
        'explanation'=> 'Piecewise cubic polynomials with continuous first and second derivatives.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In hydrological modeling, which method estimates streamflow using rainfall intensity and catchment characteristics?',
        'choices'    => json_encode([
            'Rational method',
            'Unit hydrograph',
            'Nash model',
            'SCS Curve Number',
        ]),
        'answer'     => 'Rational method',
        'explanation'=> 'Q = CiA estimates peak discharge based on rainfall intensity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which difference scheme is unconditionally stable for parabolic PDEs?',
        'choices'    => json_encode([
            'Crank-Nicolson',
            'FTCS',
            'Backward Euler',
            'Leapfrog',
        ]),
        'answer'     => 'Crank-Nicolson',
        'explanation'=> 'Combines implicit and explicit methods, unconditionally stable and second order accurate.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In transportation economics, which indicator measures the additional cost per trip saved by reducing congestion?',
        'choices'    => json_encode([
            'Marginal cost of congestion',
            'Aggregate user cost',
            'Vehicle operating cost',
            'Value of travel time savings',
        ]),
        'answer'     => 'Marginal cost of congestion',
        'explanation'=> 'Marginal cost represents cost changes associated with incremental congestion changes.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which statistical test is used to assess goodness-of-fit for categorical data?',
        'choices'    => json_encode([
            'Chi-square test',
            't-test',
            'ANOVA',
            'Regression F-test',
        ]),
        'answer'     => 'Chi-square test',
        'explanation'=> 'Compares observed and expected frequencies in categories.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which GNSS error source is mitigated by using carrier-phase measurements?',
        'choices'    => json_encode([
            'Multipath',
            'Satellite clock error',
            'Tropospheric delay',
            'Ionospheric delay',
        ]),
        'answer'     => 'Ionospheric delay',
        'explanation'=> 'Carrier-phase allows precise estimation and removal of ionospheric delay.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'In network modeling of traffic, which algorithm finds the shortest path?',
        'choices'    => json_encode([
            'Dijkstra’s algorithm',
            'Bellman-Ford algorithm',
            'Floyd-Warshall algorithm',
            'A* search algorithm',
        ]),
        'answer'     => 'Dijkstra’s algorithm',
        'explanation'=> 'Computes shortest path from single source node efficiently in positive-weight graphs.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 7,
        'question'   => 'Which method estimates sediment transport capacity in open channels based on flow and sediment size?',
        'choices'    => json_encode([
            'Meyer-Peter Müller formula',
            'Einstein formula',
            'Engelund-Hansen formula',
            'Yalin formula',
        ]),
        'answer'     => 'Meyer-Peter Müller formula',
        'explanation'=> 'Empirical relation for bed-load transport in rivers, function of shear stress and sediment size.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
