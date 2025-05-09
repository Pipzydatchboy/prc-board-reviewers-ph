<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart10Seeder extends Seeder
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
        'part'       => 10,
        'question'   => 'In numerical linear algebra, which decomposition applies to symmetric positive-definite matrices?',
        'choices'    => json_encode([
            'Cholesky decomposition',
            'LU decomposition',
            'QR decomposition',
            'Eigen decomposition',
        ]),
        'answer'     => 'Cholesky decomposition',
        'explanation'=> 'A=LL^T for SPD matrices simplifies solving linear systems.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which finite element method concept divides domain into non-overlapping elements?',
        'choices'    => json_encode([
            'Mesh generation',
            'Grid sampling',
            'Domain decomposition',
            'Isoparametric mapping',
        ]),
        'answer'     => 'Mesh generation',
        'explanation'=> 'Mesh partitions the problem domain for element formulation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'In surveying, which level error is corrected by the two-peg test?',
        'choices'    => json_encode([
            'Instrument axis error',
            'Collimation error',
            'Backsight error',
            'Tape error',
        ]),
        'answer'     => 'Instrument axis error',
        'explanation'=> 'Two-peg identifies and corrects line-of-sight inclination.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which numerical ODE solver is both implicit and second-order accurate?',
        'choices'    => json_encode([
            'Trapezoidal rule',
            'Euler’s method',
            'Runge-Kutta 4',
            'Midpoint rule',
        ]),
        'answer'     => 'Trapezoidal rule',
        'explanation'=> 'Implicit trapezoidal rule is second-order and A-stable.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'In transportation planning, which model describes the relationship between speed and density as logarithmic?',
        'choices'    => json_encode([
            'Greenberg model',
            'Greenshields model',
            'Underwood model',
            'Pipe’s model',
        ]),
        'answer'     => 'Greenberg model',
        'explanation'=> 'v = c ln(k_j/k) defines logarithmic speed-density relation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which method calculates earthwork volume using contour intervals and prismoidal formula?',
        'choices'    => json_encode([
            'Prismoidal method',
            'Contour method',
            'Grid method',
            'End-area method',
        ]),
        'answer'     => 'Prismoidal method',
        'explanation'=> 'Applies prismoidal formula on end and mid-area sections derived from contours.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which finite difference scheme uses average of explicit and implicit Euler methods?',
        'choices'    => json_encode([
            'Crank-Nicolson',
            'Forward Euler',
            'Backward Euler',
            'Leapfrog',
        ]),
        'answer'     => 'Crank-Nicolson',
        'explanation'=> 'Implicit scheme averaging time levels for second-order accuracy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which condition ensures conjugate gradient converges for a linear system?',
        'choices'    => json_encode([
            'Matrix symmetric positive-definite',
            'Matrix diagonally dominant',
            'Matrix invertible',
            'Matrix sparse',
        ]),
        'answer'     => 'Matrix symmetric positive-definite',
        'explanation'=> 'CG requires SPD matrices for guaranteed finite-step convergence.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which mesh element shape is preferred to avoid ill-conditioned stiffness matrices?',
        'choices'    => json_encode([
            'Equilateral triangles',
            'Long skinny triangles',
            'Rectangles',
            'Arbitrary polygons',
        ]),
        'answer'     => 'Equilateral triangles',
        'explanation'=> 'Balanced aspect ratios improve numerical stability in FEA.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which root-finding method requires only function evaluations and no derivatives?',
        'choices'    => json_encode([
            'Secant method',
            'Newton-Raphson',
            'Bisection method',
            'Fixed-point iteration',
        ]),
        'answer'     => 'Secant method',
        'explanation'=> 'Approximates derivative by finite differences for successive iterates.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'In contouring, which method interpolates linearly between grid elevations?',
        'choices'    => json_encode([
            'Contour interpolation',
            'Triangulation',
            'Planimeter method',
            'Grid method',
        ]),
        'answer'     => 'Contour interpolation',
        'explanation'=> 'Assumes linear change in elevation between known points to draw contours.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which numerical integration rule is exact for polynomials up to degree 5 over five points?',
        'choices'    => json_encode([
            'Boole’s rule',
            'Simpson’s 1/3',
            'Simpson’s 3/8',
            'Gaussian quadrature',
        ]),
        'answer'     => 'Boole’s rule',
        'explanation'=> 'Uses five equally spaced points to integrate exact to fifth-degree polynomials.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'In traffic flow theory, which density corresponds to maximum flow (capacity)?',
        'choices'    => json_encode([
            'Critical density',
            'Jam density',
            'Free-flow density',
            'Design density',
        ]),
        'answer'     => 'Critical density',
        'explanation'=> 'Density at which q = k·v reaches its maximum value.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which mathematical object describes second derivative information in optimization?',
        'choices'    => json_encode([
            'Hessian matrix',
            'Gradient vector',
            'Lagrangian multiplier',
            'Jacobian matrix',
        ]),
        'answer'     => 'Hessian matrix',
        'explanation'=> 'Matrix of second partial derivatives representing curvature of objective.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which GNSS technique resolves integer ambiguities for centimeter-level accuracy?',
        'choices'    => json_encode([
            'RTK',
            'DGPS',
            'Stop-and-go',
            'Precise point positioning',
        ]),
        'answer'     => 'RTK',
        'explanation'=> 'Real-Time Kinematic uses carrier-phase ambiguity resolution for high precision.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which approximation minimizes maximum error rather than mean square error?',
        'choices'    => json_encode([
            'Minimax approximation',
            'Least squares',
            'Polynomial regression',
            'Spline interpolation',
        ]),
        'answer'     => 'Minimax approximation',
        'explanation'=> 'Chebyshev polynomials achieve minimax optimality across interval.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which reservoir routing method applies continuity and storage relationships directly?',
        'choices'    => json_encode([
            'Level-pool routing',
            'Muskingum method',
            'Kinematic wave routing',
            'Unit hydrograph routing',
        ]),
        'answer'     => 'Level-pool routing',
        'explanation'=> 'Uses stage-storage-discharge curves and continuity equation for routing.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which statistic measures average vertical scatter around a regression line?',
        'choices'    => json_encode([
            'Standard error of estimate',
            'R-squared',
            'Mean absolute error',
            'Residual sum of squares',
        ]),
        'answer'     => 'Standard error of estimate',
        'explanation'=> 'Quantifies dispersion of observed values around predicted values.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'In highway design, which sight distance allows safe passing on two-lane roads?',
        'choices'    => json_encode([
            'Overtaking sight distance',
            'Stopping sight distance',
            'Decision sight distance',
            'Intersection sight distance',
        ]),
        'answer'     => 'Overtaking sight distance',
        'explanation'=> 'Ensures sufficient distance for overtaking maneuvers at design speed.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 10,
        'question'   => 'Which backward finite difference approximation is second-order accurate for the first derivative?',
        'choices'    => json_encode([
            'y\'(x) ≈ (3y_n - 4y_{n-1} + y_{n-2})/(2h)',
            'y\'(x) ≈ (y_{n+1}-y_{n-1})/(2h)',
            'y(x) ≈ y_n + h y\'_n',
            'y\'(x) ≈ (y_n - y_{n-1})/h',
        ]),
        'answer'     => "y'(x) ≈ (3y_n - 4y_{n-1} + y_{n-2})/(2h)",
        'explanation'=> 'Second-order backward difference uses three points for derivative approximation.',
        'created_at' => $now,
        'updated_at' => $now,
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
