<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart6Seeder extends Seeder
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

// 1
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'What type of research design compares groups at a single point in time?',
  'choices'     => json_encode([
    'Cross‑sectional study',
    'Longitudinal study',
    'Experimental study',
    'Case study',
  ]),
  'answer'      => 'Cross‑sectional study',
  'explanation' => 'Cross‑sectional studies analyze different subjects at one moment to assess prevalence or correlations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which level of measurement uses categories without any order?',
  'choices'     => json_encode([
    'Nominal',
    'Ordinal',
    'Interval',
    'Ratio',
  ]),
  'answer'      => 'Nominal',
  'explanation' => 'Nominal scales classify data into distinct categories with no intrinsic ranking.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'What sampling method gives every member of the population an equal chance of selection?',
  'choices'     => json_encode([
    'Simple random sampling',
    'Purposive sampling',
    'Snowball sampling',
    'Convenience sampling',
  ]),
  'answer'      => 'Simple random sampling',
  'explanation' => 'Simple random sampling uses randomization so each individual has the same probability of being chosen.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which statistic measures the strength and direction of a linear relationship between two variables?',
  'choices'     => json_encode([
    'Pearson’s r',
    'Chi‑square',
    'ANOVA F‑statistic',
    'Cronbach’s alpha',
  ]),
  'answer'      => 'Pearson’s r',
  'explanation' => 'Pearson’s correlation coefficient quantifies linear association between continuous variables.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'A p‑value less than 0.05 typically indicates:',
  'choices'     => json_encode([
    'Statistically significant result',
    'High measurement error',
    'Insufficient sample size',
    'Descriptive analysis only',
  ]),
  'answer'      => 'Statistically significant result',
  'explanation' => 'A p‑value below 0.05 suggests rejecting the null hypothesis at the 5% significance level.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which measure of central tendency is most affected by extreme values?',
  'choices'     => json_encode([
    'Mean',
    'Median',
    'Mode',
    'Interquartile range',
  ]),
  'answer'      => 'Mean',
  'explanation' => 'The arithmetic mean is sensitive to outliers, which can skew the average.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which non‑parametric test compares observed frequencies to expected frequencies?',
  'choices'     => json_encode([
    'Chi‑square goodness‑of‑fit test',
    'Independent t‑test',
    'Pearson’s r',
    'ANOVA',
  ]),
  'answer'      => 'Chi‑square goodness‑of‑fit test',
  'explanation' => 'Chi‑square tests assess whether observed categorical distributions differ from expected.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which term refers to consistency of measurement over time?',
  'choices'     => json_encode([
    'Reliability',
    'Validity',
    'Generalizability',
    'Objectivity',
  ]),
  'answer'      => 'Reliability',
  'explanation' => 'Reliability indicates that repeated measurements yield similar results under consistent conditions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which sampling bias occurs when respondents self‑select into a study?',
  'choices'     => json_encode([
    'Self‑selection bias',
    'Cluster sampling bias',
    'Systematic sampling bias',
    'Stratification bias',
  ]),
  'answer'      => 'Self‑selection bias',
  'explanation' => 'Self‑selection bias arises when participants choose themselves, affecting representativeness.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which validity type assesses whether a test covers all aspects of the construct?',
  'choices'     => json_encode([
    'Content validity',
    'Criterion validity',
    'Construct validity',
    'Face validity',
  ]),
  'answer'      => 'Content validity',
  'explanation' => 'Content validity examines if the measurement fully samples the domain of interest.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which design allows manipulation of an independent variable and control of extraneous factors?',
  'choices'     => json_encode([
    'Experimental design',
    'Cross‑sectional design',
    'Correlational design',
    'Descriptive design',
  ]),
  'answer'      => 'Experimental design',
  'explanation' => 'Experimental designs use random assignment and control groups to test causal hypotheses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which index measures the number of crimes per 100,000 population?',
  'choices'     => json_encode([
    'Crime rate',
    'Clearance rate',
    'Recidivism rate',
    'Arrest rate',
  ]),
  'answer'      => 'Crime rate',
  'explanation' => 'Crime rate standardizes crime count by population size, allowing comparison across areas.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which research method involves in‑depth, contextual analysis of a single case?',
  'choices'     => json_encode([
    'Case study',
    'Survey',
    'Meta‑analysis',
    'Cross‑sectional study',
  ]),
  'answer'      => 'Case study',
  'explanation' => 'Case studies provide detailed qualitative insights into complex phenomena.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which term describes the degree to which results can be applied to other contexts?',
  'choices'     => json_encode([
    'Generalizability',
    'Reliability',
    'Internal validity',
    'Precision',
  ]),
  'answer'      => 'Generalizability',
  'explanation' => 'Generalizability refers to the extent findings apply beyond the studied sample or setting.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'In survey research, which question type restricts answers to predefined options?',
  'choices'     => json_encode([
    'Closed‑ended questions',
    'Open‑ended questions',
    'Projective questions',
    'Leading questions',
  ]),
  'answer'      => 'Closed‑ended questions',
  'explanation' => 'Closed‑ended questions provide fixed response choices for easier quantification.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which procedure ensures research participants understand study risks and benefits?',
  'choices'     => json_encode([
    'Informed consent',
    'Random assignment',
    'Peer review',
    'Data anonymization',
  ]),
  'answer'      => 'Informed consent',
  'explanation' => 'Informed consent provides participants with information needed to decide on involvement.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which ethical principle requires protecting participant identities in publication?',
  'choices'     => json_encode([
    'Confidentiality',
    'Beneficence',
    'Justice',
    'Autonomy',
  ]),
  'answer'      => 'Confidentiality',
  'explanation' => 'Confidentiality protects participant data and privacy in reporting research results.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which statistical method compares means of two independent groups?',
  'choices'     => json_encode([
    'Independent samples t‑test',
    'Paired samples t‑test',
    'Chi‑square test',
    'ANOVA',
  ]),
  'answer'      => 'Independent samples t‑test',
  'explanation' => 'An independent t‑test assesses whether two separate groups differ significantly on a continuous outcome.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which visualization displays distribution of a continuous variable via quartiles?',
  'choices'     => json_encode([
    'Box plot',
    'Histogram',
    'Scatter plot',
    'Bar chart',
  ]),
  'answer'      => 'Box plot',
  'explanation' => 'Box plots show median, quartiles, and potential outliers of numeric data.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 6,
  'question'    => 'Which index summarizes overall crime seriousness by weighting offense types?',
  'choices'     => json_encode([
    'Crime severity index',
    'Crime rate',
    'Recidivism rate',
    'Clearance rate',
  ]),
  'answer'      => 'Crime severity index',
  'explanation' => 'Crime severity indices weight crimes by seriousness to gauge overall community risk.',
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
