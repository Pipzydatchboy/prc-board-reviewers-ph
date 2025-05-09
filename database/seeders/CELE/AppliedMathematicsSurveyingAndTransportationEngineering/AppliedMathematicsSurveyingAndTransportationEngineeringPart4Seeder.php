<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart4Seeder extends Seeder
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
        'part'       => 4,
        'question'   => 'Using power series, what is the Maclaurin expansion of ln(1+x) up to x^3 term?',
        'choices'    => json_encode([
            'x - x^2/2 + x^3/3',
            'x + x^2/2 - x^3/3',
            'x - x^2 + x^3',
            'x + x^2 - x^3',
        ]),
        'answer'     => 'x - x^2/2 + x^3/3',
        'explanation'=> 'Maclaurin of ln(1+x)=x - x^2/2 + x^3/3 - ... for |x|<1.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In differential leveling, the corrected elevation difference includes corrections for curvature and refraction. What is the net correction per km?',
        'choices'    => json_encode([
            '-0.0785 m',
            '+0.0785 m',
            '-0.067 m',
            '+0.067 m',
        ]),
        'answer'     => '-0.0785 m',
        'explanation'=> 'Curvature+refraction = -0.0785 m per km of sight.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'Which numerical integration rule uses weights 1, 3, 3, 1 over three equal subintervals?',
        'choices'    => json_encode([
            'Simpson’s 3/8 rule',
            'Simpson’s 1/3 rule',
            'Boole’s rule',
            'Trapezoidal rule',
        ]),
        'answer'     => 'Simpson’s 3/8 rule',
        'explanation'=> '3/8 rule applies weights 1,3,3,1 on four points over three subintervals.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'What is the chainage of a point located 150 m beyond station 10+00 in road alignment?',
        'choices'    => json_encode([
            '11+50',
            '9+150',
            '10+150',
            '11+00',
        ]),
        'answer'     => '11+50',
        'explanation'=> '10+00 + 150 m = 11+50 (chainage format).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In traffic engineering, the saturation flow rate is typically expressed in vehicles per hour per lane. What is a common design value?',
        'choices'    => json_encode([
            '1900 veh/h/lane',
            '600 veh/h/lane',
            '3600 veh/h/lane',
            '1200 veh/h/lane',
        ]),
        'answer'     => '1900 veh/h/lane',
        'explanation'=> 'Design saturation flow ~1900 veh/h/lane for urban arterials.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In surveying, the collimation error is eliminated by which method?',
        'choices'    => json_encode([
            'Face left and face right readings',
            'Reciprocal leveling',
            'Differential leveling',
            'Trilateration',
        ]),
        'answer'     => 'Face left and face right readings',
        'explanation'=> 'Averaging left/right telescope readings cancels collimation error.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'Which method estimates irregular boundaries in plan area computation by summing perpendicular offsets from a baseline?',
        'choices'    => json_encode([
            'Offset method',
            'Planimeter method',
            'Grid method',
            'Triangulation',
        ]),
        'answer'     => 'Offset method',
        'explanation'=> 'Offset method uses measured offsets to compute area from baseline.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'What is the first-order error in chain surveying known as?',
        'choices'    => json_encode([
            'Chain sag',
            'Temperature correction',
            'Tape alignment error',
            'Range error',
        ]),
        'answer'     => 'Chain sag',
        'explanation'=> 'Sag of chain between supports introduces measurement error.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'Which interpolation formula is exact for cubic polynomials over three subintervals?',
        'choices'    => json_encode([
            'Lagrange’s formula',
            'Newton’s divided difference',
            'Hermite interpolation',
            'Spline interpolation',
        ]),
        'answer'     => 'Lagrange’s formula',
        'explanation'=> 'Lagrange constructs exact polynomial through given points.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In geometric progression, if first term is a and common ratio is r, what is the sum of n terms?',
        'choices'    => json_encode([
            'a(1-r^n)/(1-r)',
            'ar^n',
            'a(1+r^n)',
            'nr',
        ]),
        'answer'     => 'a(1-r^n)/(1-r)',
        'explanation'=> 'Sum GP = a(1-r^n)/(1-r) for r ≠1.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'What is the width of the transition curve required for a super-elevation rate of 6% over a spiral length of 60 m?',
        'choices'    => json_encode([
            '3.6 m',
            '6 m',
            '1.8 m',
            '2.4 m',
        ]),
        'answer'     => '3.6 m',
        'explanation'=> 'Width = superelevation rate × spiral length = 0.06×60 = 3.6 m.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In present worth analysis, PW of a future sum F at interest rate i for n periods is:',
        'choices'    => json_encode([
            'F/(1+i)^n',
            'F(1+i)^n',
            'F*(1+i*n)',
            'F - (1+i)^n',
        ]),
        'answer'     => 'F/(1+i)^n',
        'explanation'=> 'PW = F discounted by (1+i)^n to time zero.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'Which method determines the orientation of a closed traverse by equalizing angular misclosure only?',
        'choices'    => json_encode([
            'Transit rule',
            'Bowditch rule',
            'Least squares',
            'Compass rule',
        ]),
        'answer'     => 'Transit rule',
        'explanation'=> 'Transit rule adjusts angles evenly across traverse to correct angular misclosure.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In two-point problem for plane table, which method is used?',
        'choices'    => json_encode([
            'Radiation method',
            'Intersection method',
            'Traversing method',
            'Resection method',
        ]),
        'answer'     => 'Intersection method',
        'explanation'=> 'Intersection uses lines drawn to two known points to locate unknown point.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'What is the fundamental equation of traffic flow relating flow (q), density (k) and speed (v)?',
        'choices'    => json_encode([
            'q = k v',
            'q = k/v',
            'q = v/k',
            'q = 1/(k v)',
        ]),
        'answer'     => 'q = k v',
        'explanation'=> 'Flow equals density times speed in traffic flow theory.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In surveying, a stationing of 12+345 indicates what distance in meters?',
        'choices'    => json_encode([
            '12345 m',
            '124.345 m',
            '12.345 m',
            '120 m',
        ]),
        'answer'     => '12345 m',
        'explanation'=> 'Station 12+345 represents 12×100 + 345 = 12345 meters.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'Which method of moments estimator for sample variance is unbiased?',
        'choices'    => json_encode([
            'Dividing sum of squared deviations by n-1',
            'Dividing by n',
            'Dividing by n+1',
            'None',
        ]),
        'answer'     => 'Dividing sum of squared deviations by n-1',
        'explanation'=> 'Unbiased estimator uses denominator n-1 for sample variance.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In channel cross-section area calculation, what geometrical method is used for parabolic sections?',
        'choices'    => json_encode([
            'Integration of y dx',
            'Trapezoidal rule',
            'Midpoint rule',
            'Simpson’s rule',
        ]),
        'answer'     => 'Integration of y dx',
        'explanation'=> 'Exact area of parabola given by integral of function describing channel depth profile.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'Which formula is used to compute chord bearing from tangent bearing and deflection angle?',
        'choices'    => json_encode([
            'Chord bearing = tangent bearing + deflection/2',
            'Chord bearing = tangent bearing + deflection',
            'Chord bearing = tangent bearing - deflection',
            'Chord bearing = deflection/2',
        ]),
        'answer'     => 'Chord bearing = tangent bearing + deflection/2',
        'explanation'=> 'Approximation for small deflection angles for curve layout.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 4,
        'question'   => 'In statistical quality control, what is the purpose of control limits?',
        'choices'    => json_encode([
            'Distinguish common from special causes of variation',
            'Set product specifications',
            'Determine sample size',
            'Estimate process mean',
        ]),
        'answer'     => 'Distinguish common from special causes of variation',
        'explanation'=> 'Control limits signal when process variation exceeds expected common cause variation.',
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
