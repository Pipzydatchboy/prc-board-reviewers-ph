<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart9Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       // 161
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What is the primary purpose of a literature review in educational research?',
    'choices'      => json_encode([
        'Survey existing studies',
        'Collect original data',
        'Test a hypothesis',
        'Publish final results'
    ]),
    'answer'        => 'Survey existing studies',
    'explanation'   => 'A literature review synthesizes previous research to contextualize a study.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 162
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which sampling method selects participants based on ease of access?',
    'choices'      => json_encode([
        'Random sampling',
        'Stratified sampling',
        'Convenience sampling',
        'Purposive sampling'
    ]),
    'answer'        => 'Convenience sampling',
    'explanation'   => 'Convenience sampling uses readily available participants.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 163
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What is the main advantage of stratified sampling?',
    'choices'      => json_encode([
        'Simplest to implement',
        'Ensures representation of key subgroups',
        'Cheapest method',
        'No sampling bias'
    ]),
    'answer'        => 'Ensures representation of key subgroups',
    'explanation'   => 'Stratified sampling divides the population into strata and samples each proportionally.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 164
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which variable is manipulated by the researcher in an experiment?',
    'choices'      => json_encode([
        'Independent variable',
        'Dependent variable',
        'Control variable',
        'Extraneous variable'
    ]),
    'answer'        => 'Independent variable',
    'explanation'   => 'The independent variable is the factor the researcher changes to observe effects.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 165
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which measure of central tendency is most affected by extreme scores?',
    'choices'      => json_encode([
        'Median',
        'Mode',
        'Mean',
        'Range'
    ]),
    'answer'        => 'Mean',
    'explanation'   => 'The mean is sensitive to outliers, which can skew the average.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 166
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What does IRB stand for in research ethics?',
    'choices'      => json_encode([
        'Internal Review Board',
        'Institutional Review Board',
        'International Research Board',
        'Independent Research Bureau'
    ]),
    'answer'        => 'Institutional Review Board',
    'explanation'   => 'An IRB reviews research proposals to protect human subjects.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 167
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What is informed consent?',
    'choices'      => json_encode([
        'Participant agreement after full disclosure',
        'Random assignment process',
        'Post-study debriefing',
        'Data confidentiality protocol'
    ]),
    'answer'        => 'Participant agreement after full disclosure',
    'explanation'   => 'Informed consent ensures participants understand risks and benefits before participation.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 168
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which validity type assesses whether a test covers the intended content?',
    'choices'      => json_encode([
        'Construct validity',
        'Criterion validity',
        'Content validity',
        'Face validity'
    ]),
    'answer'        => 'Content validity',
    'explanation'   => 'Content validity examines how well test items represent the subject matter.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 169
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which research design collects data at several points over time?',
    'choices'      => json_encode([
        'Cross-sectional',
        'Longitudinal',
        'Case study',
        'Correlational'
    ]),
    'answer'        => 'Longitudinal',
    'explanation'   => 'Longitudinal designs follow the same subjects over multiple periods.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 170
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which section of a research report outlines study purpose and background?',
    'choices'      => json_encode([
        'Abstract',
        'Introduction',
        'Methods',
        'Discussion'
    ]),
    'answer'        => 'Introduction',
    'explanation'   => 'The introduction frames the research problem and literature review context.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 171
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What is a null hypothesis?',
    'choices'      => json_encode([
        'Prediction of a strong effect',
        'Assumption of no relationship',
        'Statement of research purpose',
        'Forecast of positive results'
    ]),
    'answer'        => 'Assumption of no relationship',
    'explanation'   => 'The null hypothesis asserts no difference or effect in the population.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 172
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'In statistical testing, p < 0.05 typically indicates:',
    'choices'      => json_encode([
        'Less than 5% probability results are due to chance',
        'More than 5% effect size',
        'Five percent margin of error',
        '95% confidence in the null hypothesis'
    ]),
    'answer'        => 'Less than 5% probability results are due to chance',
    'explanation'   => 'A p-value below .05 suggests the observed effect is statistically significant.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 173
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What characterizes qualitative research?',
    'choices'      => json_encode([
        'Numeric measurement',
        'Non-numeric, descriptive data',
        'Experimental manipulation',
        'Statistical inference only'
    ]),
    'answer'        => 'Non-numeric, descriptive data',
    'explanation'   => 'Qualitative research explores meanings and experiences using text, images, or artifacts.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 174
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What is triangulation in research?',
    'choices'      => json_encode([
        'Using three researchers',
        'Combining multiple methods or data sources',
        'Repeating the same test thrice',
        'Sampling three populations'
    ]),
    'answer'        => 'Combining multiple methods or data sources',
    'explanation'   => 'Triangulation enhances validity by cross-verifying findings.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 175
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What does reliability refer to in measurement?',
    'choices'      => json_encode([
        'Consistency of results',
        'Accuracy of results',
        'Relevance of content',
        'Generalizability of findings'
    ]),
    'answer'        => 'Consistency of results',
    'explanation'   => 'Reliable instruments yield similar outcomes under consistent conditions.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 176
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What is the purpose of a pilot study?',
    'choices'      => json_encode([
        'Test feasibility and refine procedures',
        'Publish initial findings',
        'Train participants',
        'Analyze final data'
    ]),
    'answer'        => 'Test feasibility and refine procedures',
    'explanation'   => 'Pilots identify potential issues before the main study.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 177
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which chart best displays frequencies of categorical data?',
    'choices'      => json_encode([
        'Bar chart',
        'Histogram',
        'Scatter plot',
        'Line graph'
    ]),
    'answer'        => 'Bar chart',
    'explanation'   => 'Bar charts compare categories, while histograms show distribution of continuous data.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 178
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What defines a case study method?',
    'choices'      => json_encode([
        'Quantitative survey of many cases',
        'In-depth analysis of a single or small number of instances',
        'Experimental manipulation of variables',
        'Meta-analysis of multiple studies'
    ]),
    'answer'        => 'In-depth analysis of a single or small number of instances',
    'explanation'   => 'Case studies explore complex phenomena in their real-life context.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 179
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'What is external validity?',
    'choices'      => json_encode([
        'Accuracy within a study',
        'Generalizability to other contexts',
        'Consistency of measurement',
        'Precision of instruments'
    ]),
    'answer'        => 'Generalizability to other contexts',
    'explanation'   => 'External validity assesses whether findings apply beyond the studied sample.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 180
$batch[] = [
    'subject_id'   => 6,
    'part'         => 9,
    'question'     => 'Which describes action research?',
    'choices'      => json_encode([
        'Theoretical lab experiments',
        'Practitioner-led cycles to improve practice',
        'Large-scale national surveys',
        'Meta-analysis of existing data'
    ]),
    'answer'        => 'Practitioner-led cycles to improve practice',
    'explanation'   => 'Action research involves educators systematically reflecting and modifying their practice.',
    'created_at'    => $now,
    'updated_at'    => $now,
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}
