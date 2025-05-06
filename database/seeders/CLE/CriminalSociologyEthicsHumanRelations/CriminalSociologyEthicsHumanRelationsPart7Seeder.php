<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart7Seeder extends Seeder
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
  'part'        => 7,
  'question'    => 'Which term describes the study of how media influences public perceptions of crime?',
  'choices'     => json_encode([
    'Media criminology',
    'Agenda‑setting theory',
    'Framing theory',
    'Social constructivism',
  ]),
  'answer'      => 'Framing theory',
  'explanation' => 'Framing theory examines how media presentation shapes audience interpretation of issues, including crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Social bond theory posits that strong bonds to society inhibit crime. Which is NOT one of Hirschi’s elements of the social bond?',
  'choices'     => json_encode([
    'Attachment',
    'Commitment',
    'Belief',
    'Deterrence',
  ]),
  'answer'      => 'Deterrence',
  'explanation' => 'Hirschi\'s social bond elements are attachment, commitment, involvement, and belief; deterrence is a separate concept.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which concept refers to unofficial, informal social controls exercised by peers and family to discourage deviance?',
  'choices'     => json_encode([
    'Social control',
    'Self‑control',
    'Labeling',
    'Differential association',
  ]),
  'answer'      => 'Social control',
  'explanation' => 'Social control emphasizes the influence of informal networks—family, peers—in regulating behavior.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which ethical principle obliges a criminologist to return to duty regardless of personal risk during emergencies?',
  'choices'     => json_encode([
    'Duty to care',
    'Informed consent',
    'Double‑blind principle',
    'Voluntary participation',
  ]),
  'answer'      => 'Duty to care',
  'explanation' => 'Duty to care requires professionals to prioritize public welfare even at personal cost.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which research method uses predefined questions administered to many respondents to measure attitudes toward policing?',
  'choices'     => json_encode([
    'Survey research',
    'Ethnography',
    'Case study',
    'Grounded theory',
  ]),
  'answer'      => 'Survey research',
  'explanation' => 'Surveys collect standardized data from large samples to quantify attitudes and opinions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Victim‑offender mediation is an example of which approach to justice?',
  'choices'     => json_encode([
    'Restorative justice',
    'Retributive justice',
    'Procedural justice',
    'Distributive justice',
  ]),
  'answer'      => 'Restorative justice',
  'explanation' => 'Restorative justice focuses on repairing harm through dialogue between victims and offenders.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which statistical measure indicates the proportion of variance in one variable explained by another?',
  'choices'     => json_encode([
    'Coefficient of determination (R²)',
    'Standard deviation',
    'Mean deviation',
    'Interquartile range',
  ]),
  'answer'      => 'Coefficient of determination (R²)',
  'explanation' => 'R² quantifies how well one variable predicts another in regression analysis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which ethical code principle addresses potential conflict between professional duties and personal beliefs?',
  'choices'     => json_encode([
    'Objectivity',
    'Beneficence',
    'Non‑maleficence',
    'Utility',
  ]),
  'answer'      => 'Objectivity',
  'explanation' => 'Objectivity mandates impartial judgment uninfluenced by personal bias.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which subgroup is most central to the Chicago School’s theory of urban crime?',
  'choices'     => json_encode([
    'Neighborhood ecology',
    'Biological traits',
    'Psychodynamic forces',
    'Routine activities',
  ]),
  'answer'      => 'Neighborhood ecology',
  'explanation' => 'The Chicago School studied how urban environments and social disorganization influence crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which concept describes informal ways communities enforce norms without state intervention?',
  'choices'     => json_encode([
    'Social control',
    'Judicial discretion',
    'Criminalization',
    'Restitution',
  ]),
  'answer'      => 'Social control',
  'explanation' => 'Social control mechanisms like gossip or ostracism maintain order informally.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which ethical guideline requires disclosing research funding sources to avoid bias?',
  'choices'     => json_encode([
    'Transparency',
    'Confidentiality',
    'Justice',
    'Respect for persons',
  ]),
  'answer'      => 'Transparency',
  'explanation' => 'Transparency about funding helps readers assess potential conflicts of interest.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which variable is an example of a dichotomous nominal variable?',
  'choices'     => json_encode([
    'Gender (male/female)',
    'Age',
    'Income level',
    'Frequency of arrest',
  ]),
  'answer'      => 'Gender (male/female)',
  'explanation' => 'A dichotomous nominal variable has two categories without order.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which construct refers to a variable that influences both dependent and independent variables, potentially biasing results?',
  'choices'     => json_encode([
    'Confounding variable',
    'Dependent variable',
    'Independent variable',
    'Control variable',
  ]),
  'answer'      => 'Confounding variable',
  'explanation' => 'Confounders can distort the observed relationship between studied variables if uncontrolled.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which theory argues that loosely structured social institutions in urban areas produce crime hotspots?',
  'choices'     => json_encode([
    'Social disorganization theory',
    'Routine activity theory',
    'Strain theory',
    'Labeling theory',
  ]),
  'answer'      => 'Social disorganization theory',
  'explanation' => 'Crime hotspots often arise in neighborhoods lacking cohesive social controls.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which UN instrument emphasizes the impartial administration of justice and prohibits discrimination?',
  'choices'     => json_encode([
    'Universal Declaration of Human Rights',
    'Tokyo Rules',
    'Nelson Mandela Rules',
    'Bangkok Rules',
  ]),
  'answer'      => 'Universal Declaration of Human Rights',
  'explanation' => 'UDHR Article 10 guarantees fair and public hearing by an independent tribunal without discrimination.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which method enhances validity by comparing multiple data sources or methods?',
  'choices'     => json_encode([
    'Triangulation',
    'Randomization',
    'Standardization',
    'Operationalization',
  ]),
  'answer'      => 'Triangulation',
  'explanation' => 'Triangulation uses different methods or sources to corroborate findings, improving validity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which practice involves obtaining permission from a guardian before including minors in research?',
  'choices'     => json_encode([
    'Parental consent',
    'Random sampling',
    'Peer debriefing',
    'Double‑blind design',
  ]),
  'answer'      => 'Parental consent',
  'explanation' => 'Ethical guidelines require parental or guardian consent for research involving minors.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which concept refers to community members monitoring each other to prevent crime?',
  'choices'     => json_encode([
    'Collective efficacy',
    'Strain',
    'Labeling',
    'Deterrence',
  ]),
  'answer'      => 'Collective efficacy',
  'explanation' => 'Collective efficacy describes shared trust and willingness to intervene for common good in neighborhoods.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which term describes incentives provided to participants to encourage research participation?',
  'choices'     => json_encode([
    'Incentives',
    'Random assignment',
    'Sampling frame',
    'Pilot study',
  ]),
  'answer'      => 'Incentives',
  'explanation' => 'Providing incentives motivates participation but must be balanced ethically to avoid coercion.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 7,
  'question'    => 'Which statistical test compares means among three or more independent groups?',
  'choices'     => json_encode([
    'ANOVA',
    'Chi‑square',
    'Paired t‑test',
    'Pearson’s r',
  ]),
  'answer'      => 'ANOVA',
  'explanation' => 'Analysis of variance (ANOVA) determines whether there are statistically significant differences between group means.',
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
