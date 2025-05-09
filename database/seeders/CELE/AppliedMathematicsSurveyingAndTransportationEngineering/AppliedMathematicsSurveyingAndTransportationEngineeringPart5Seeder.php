<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart5Seeder extends Seeder
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
        'part'       => 5,
        'question'   => 'In Newton’s forward difference interpolation, what is the step size h used for equally spaced x-values?',
        'choices'    => json_encode([
            'x_{i+1} - x_i',
            'x_i - x_{i-1}',
            'x_n - x_0',
            'x_{i+2} - x_i',
        ]),
        'answer'     => 'x_{i+1} - x_i',
        'explanation'=> 'h is the spacing between consecutive nodes for forward difference formulas.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which method in numerical linear algebra prevents divergence when solving Ax=b iteratively for diagonally dominant A?',
        'choices'    => json_encode([
            'Gauss-Seidel',
            'Jacobi',
            'LU decomposition',
            'QR factorization',
        ]),
        'answer'     => 'Gauss-Seidel',
        'explanation'=> 'Gauss-Seidel often converges faster than Jacobi for diagonally dominant systems.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'What is the relationship between slope (m) and grade (%) in transportation engineering?',
        'choices'    => json_encode([
            'Grade = m × 100',
            'Grade = 100/m',
            'Grade = m/100',
            'Grade = 1/m',
        ]),
        'answer'     => 'Grade = m × 100',
        'explanation'=> 'Slope expressed as decimal m corresponds to percentage by multiplying by 100.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'In differential GPS, which correction eliminates most common-mode errors?',
        'choices'    => json_encode([
            'Real-Time Kinematic (RTK)',
            'WAAS correction',
            'SBAS correction',
            'Static baseline solution',
        ]),
        'answer'     => 'Real-Time Kinematic (RTK)',
        'explanation'=> 'RTK uses carrier-phase measurements and a reference station for cm-level accuracy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which function describes the cumulative distribution of the normal distribution?',
        'choices'    => json_encode([
            'Error function (erf)',
            'Gamma function',
            'Beta function',
            'Bessel function',
        ]),
        'answer'     => 'Error function (erf)',
        'explanation'=> 'Normal CDF is expressed in terms of the Gaussian error function.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'In highway capacity, what does the term “LOS D” represent?',
        'choices'    => json_encode([
            'High density but stable flow',
            'Free-flow conditions',
            'Unstable flow',
            'Forced flow',
        ]),
        'answer'     => 'High density but stable flow',
        'explanation'=> 'LOS D indicates approaching unstable flow levels but still acceptable.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which algorithm is commonly used for point cloud registration in surveying?',
        'choices'    => json_encode([
            'Iterative Closest Point (ICP)',
            'RANSAC',
            'Dijkstra’s algorithm',
            'A* search',
        ]),
        'answer'     => 'Iterative Closest Point (ICP)',
        'explanation'=> 'ICP minimizes distance between corresponding points for cloud alignment.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'What is the modulus of elasticity of Portland cement concrete typically used for pavement design?',
        'choices'    => json_encode([
            '25 GPa',
            '10 GPa',
            '50 GPa',
            '5 GPa',
        ]),
        'answer'     => '25 GPa',
        'explanation'=> 'Concrete modulus ranges 20–30 GPa depending on mix and age.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'In the error ellipse of a survey point, what does the semi-major axis represent?',
        'choices'    => json_encode([
            'Maximum positional uncertainty',
            'Average uncertainty',
            'Minimum uncertainty',
            'Standard deviation of northing',
        ]),
        'answer'     => 'Maximum positional uncertainty',
        'explanation'=> 'Ellipse major axis aligns with direction of greatest error variance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which quadrature rule provides exact results for polynomials up to degree seven?',
        'choices'    => json_encode([
            'Boole’s rule',
            'Trapezoidal rule',
            'Simpson’s 1/3',
            'Simpson’s 3/8',
        ]),
        'answer'     => 'Boole’s rule',
        'explanation'=> 'Boole’s uses five points to achieve seventh-degree precision.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'In variance component estimation for network adjustment, which component represents random instrument error?',
        'choices'    => json_encode([
            'Phi^2 in weight matrix',
            'Tau^2 in weight matrix',
            'Sigma^2 in covariance',
            'Lambda^2 in design matrix',
        ]),
        'answer'     => 'Phi^2 in weight matrix',
        'explanation'=> 'Phi^2 scales observation variances representing instrument precision.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which model in traffic flow theory describes platoon dispersion over time?',
        'choices'    => json_encode([
            'Shockwave model',
            'LWR model',
            'Greenberg model',
            'Edie’s model',
        ]),
        'answer'     => 'Shockwave model',
        'explanation'=> 'Shockwave analyzes propagation of flow-density discontinuities.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'What is the effect of multipath interference on GNSS measurements?',
        'choices'    => json_encode([
            'Bias in position estimates',
            'Increased receiver battery life',
            'Reduced atmospheric delays',
            'Faster convergence',
        ]),
        'answer'     => 'Bias in position estimates',
        'explanation'=> 'Reflected signals cause systematic position errors if unmitigated.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'In bituminous mix design, which mathematical method ensures target density and void content?',
        'choices'    => json_encode([
            'Marshall method',
            'Superpave method',
            'Hveem method',
            'Sieve analysis',
        ]),
        'answer'     => 'Marshall method',
        'explanation'=> 'Marshall uses bulk density and void ratios to optimize binder content.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which root-finding method uses only function evaluations without derivatives?',
        'choices'    => json_encode([
            'Secant method',
            'Newton-Raphson',
            'Bisection method',
            'Regula-Falsi',
        ]),
        'answer'     => 'Secant method',
        'explanation'=> 'Secant approximates derivative by finite difference for convegence.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'In time series forecasting, which model uses both autoregression and moving average components?',
        'choices'    => json_encode([
            'ARMA model',
            'ARIMA model',
            'Exponential smoothing',
            'Fourier series',
        ]),
        'answer'     => 'ARMA model',
        'explanation'=> 'ARMA(p,q) combines AR(p) and MA(q) for stationary time series.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which factor in the modified universal soil loss equation (MUSLE) is estimated using runoff and peak flow rate?',
        'choices'    => json_encode([
            'C runoff factor',
            'K soil erodibility factor',
            'P support practice factor',
            'LS topographic factor',
        ]),
        'answer'     => 'C runoff factor',
        'explanation'=> 'In MUSLE, C relates soil loss to runoff volume and rate.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which curve fitting technique minimizes maximum error rather than squared error?',
        'choices'    => json_encode([
            'Chebyshev approximation',
            'Least squares',
            'Polynomial regression',
            'Spline interpolation',
        ]),
        'answer'     => 'Chebyshev approximation',
        'explanation'=> 'Minimax fit reduces the maximum deviation across interval.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'In traffic signal coordination, which metric measures the percentage of vehicles arriving on green?',
        'choices'    => json_encode([
            'Bandwidth efficiency',
            'Cycle failure',
            'Offset error',
            'Saturation level',
        ]),
        'answer'     => 'Bandwidth efficiency',
        'explanation'=> 'Indicates green wave effectiveness for platoon progression.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 5,
        'question'   => 'Which method in geodetic surveying determines ellipsoidal height using satellite geometry?',
        'choices'    => json_encode([
            'GNSS ellipsoidal solution',
            'Leveling',
            'Trilateration',
            'Stadia method',
        ]),
        'answer'     => 'GNSS ellipsoidal solution',
        'explanation'=> 'GNSS delivers direct ellipsoidal heights via satellite positioning.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
