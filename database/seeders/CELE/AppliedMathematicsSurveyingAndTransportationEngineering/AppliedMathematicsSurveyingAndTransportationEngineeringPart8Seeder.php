<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart8Seeder extends Seeder
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
        'part'       => 8,
        'question'   => 'In finite difference methods, which scheme is second-order accurate in time and space for heat equation?',
        'choices'    => json_encode([
            'Crank-Nicolson',
            'FTCS',
            'Backward Euler',
            'Leapfrog',
        ]),
        'answer'     => 'Crank-Nicolson',
        'explanation'=> 'Combines trapezoidal rule in time and central differences in space for second-order accuracy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which surveying method uses horizontal angles and baseline lengths to determine all other points?',
        'choices'    => json_encode([
            'Triangulation',
            'Trilateration',
            'Traversing',
            'Resection',
        ]),
        'answer'     => 'Triangulation',
        'explanation'=> 'Computes positions using angles and known distance between two control points.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In numerical integration, the Gaussian quadrature with two points is exact for polynomials up to which degree?',
        'choices'    => json_encode([
            '3',
            '1',
            '5',
            '7',
        ]),
        'answer'     => '3',
        'explanation'=> 'Two-point Gauss-Legendre integrates exactly up to cubic polynomials.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which traffic flow model represents the relationship q = k*u assuming triangular fundamental diagram?',
        'choices'    => json_encode([
            'Greenshields',
            'Greenberg',
            'Underwood',
            'Pipe’s model',
        ]),
        'answer'     => 'Greenshields',
        'explanation'=> 'Greenshields assumes linear speed-density relation yielding triangular q-k diagram.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In plane table surveying, the three-point problem is solved using which graphical method?',
        'choices'    => json_encode([
            'Bessel’s method',
            'Bowditch rule',
            'Intersection method',
            'Radiation method',
        ]),
        'answer'     => 'Bessel’s method',
        'explanation'=> 'Orient table by bisecting angles to three known points equiangularly.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which statistical technique reduces dimensionality of data by orthogonal projection?',
        'choices'    => json_encode([
            'Principal Component Analysis',
            'Factor Analysis',
            'Cluster Analysis',
            'Discriminant Analysis',
        ]),
        'answer'     => 'Principal Component Analysis',
        'explanation'=> 'PCA transforms variables into uncorrelated principal components ordered by variance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In error propagation, which formula gives the variance of a function of independent variables?',
        'choices'    => json_encode([
            'Sum of (partial derivative squared times variance)',
            'Product of variances',
            'Difference of variances',
            'Sum of variances',
        ]),
        'answer'     => 'Sum of (partial derivative squared times variance)',
        'explanation'=> 'Linear approximation: var(f) ≈ Σ (∂f/∂xi)^2 Var(xi).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which method estimates the volume of earthwork by averaging the end areas and mid-area (prismoidal formula)?',
        'choices'    => json_encode([
            'Prismoidal method',
            'End-area method',
            'Grid method',
            'Cross-section method',
        ]),
        'answer'     => 'Prismoidal method',
        'explanation'=> 'Prismoidal formula: V = (L/6)(A1 + 4Am + A2).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In numerical solution of ODEs, which method requires solving algebraic equations at each step?',
        'choices'    => json_encode([
            'Implicit methods',
            'Explicit methods',
            'Predictor-corrector methods',
            'Taylor series methods',
        ]),
        'answer'     => 'Implicit methods',
        'explanation'=> 'Implicit schemes like backward Euler solve equations involving unknown future values.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which formula relates chainage along a curve to tangent bearing and curve deflection?',
        'choices'    => json_encode([
            'Delta = L/R',
            'L = R*delta',
            'Tangent = delta/2',
            'L = 2*R*tan(delta/2)',
        ]),
        'answer'     => 'L = R*delta',
        'explanation'=> 'Curve length L = radius R times deflection angle Δ (in radians).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In traffic signal design, the cycle length C using Webster’s formula is (1.5L+5)/(1–Y). What does Y represent?',
        'choices'    => json_encode([
            'Sum of critical flow ratios',
            'Peak-hour factor',
            'Lost time',
            'Cycle failure',
        ]),
        'answer'     => 'Sum of critical flow ratios',
        'explanation'=> 'Y = Σ (qi/si) where qi = approach flow rate, si = saturation flow rate.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which method uses linear equations to model water distribution network flow? ',
        'choices'    => json_encode([
            'Hardy Cross method',
            'Manning equation',
            'Darcy-Weisbach',
            'Bernoulli’s equation',
        ]),
        'answer'     => 'Hardy Cross method',
        'explanation'=> 'Iteratively balances head loss in looped networks.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In constructing a theodolite traverse, which rule adjusts angular misclosure only?',
        'choices'    => json_encode([
            'Transit rule',
            'Bowditch rule',
            'Compass rule',
            'Least squares',
        ]),
        'answer'     => 'Transit rule',
        'explanation'=> 'Evenly distributes angular error across traverse angles.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which statistical distribution is symmetric and described by its mean and variance?',
        'choices'    => json_encode([
            'Normal distribution',
            'Poisson distribution',
            'Exponential distribution',
            'Uniform distribution',
        ]),
        'answer'     => 'Normal distribution',
        'explanation'=> 'Defined by bell-shaped curve with parameters μ and σ².',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In photogrammetric surveying, which approach uses overlapping aerial photos to determine 3D coordinates?',
        'choices'    => json_encode([
            'Stereo plotting',
            'Monoscopic plotting',
            'Photocell scanning',
            'Ground control',
        ]),
        'answer'     => 'Stereo plotting',
        'explanation'=> 'Uses parallax from overlapping images to extract elevation and coordinates.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which rule in numerical analysis provides error estimate by comparing successive Richardson extrapolations?',
        'choices'    => json_encode([
            'Romberg integration',
            'Simpson’s rule',
            'Trapezoidal rule',
            'Gauss quadrature',
        ]),
        'answer'     => 'Romberg integration',
        'explanation'=> 'Uses Richardson extrapolation on trapezoidal rule for higher accuracy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In surveying, which refraction correction is commonly applied as kH^2, where k ≈0.13×10^{-6}?',
        'choices'    => json_encode([
            'Leveling correction',
            'Temperature correction',
            'Pressure correction',
            'Humidity correction',
        ]),
        'answer'     => 'Leveling correction',
        'explanation'=> 'Refraction correction ≈ -0.0785H^2 per km; k used in formulas.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which optimization algorithm uses gradient descent with a momentum term to speed convergence?',
        'choices'    => json_encode([
            'Nesterov accelerated gradient',
            'Stochastic gradient descent',
            'Newton’s method',
            'Conjugate gradient',
        ]),
        'answer'     => 'Nesterov accelerated gradient',
        'explanation'=> 'Momentum term anticipates future gradient to improve speed.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'In traffic safety analysis, which metric quantifies the frequency of accidents per million vehicle-km traveled?',
        'choices'    => json_encode([
            'Accident rate',
            'Crash modification factor',
            'Probability of crash',
            'Severity index',
        ]),
        'answer'     => 'Accident rate',
        'explanation'=> 'Expressed as crashes per million vehicle-km, standard safety metric.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 8,
        'question'   => 'Which matrix decomposition is used for solving least squares problems efficiently?',
        'choices'    => json_encode([
            'QR decomposition',
            'LU decomposition',
            'Cholesky decomposition',
            'SVD decomposition',
        ]),
        'answer'     => 'QR decomposition',
        'explanation'=> 'QR factorization solves Ax≈b by reducing to upper triangular system.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
