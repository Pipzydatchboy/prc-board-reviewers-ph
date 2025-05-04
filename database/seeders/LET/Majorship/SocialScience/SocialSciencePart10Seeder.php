<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart10Seeder extends Seeder
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
       $batch = [];

       // Part 10 – Question 181
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which economic model describes a market dominated by a small number of large firms?',
           'choices'      => json_encode([
               'Monopoly',
               'Oligopoly',
               'Perfect competition',
               'Monopsony',
           ]),
           'answer'       => 'Oligopoly',
           'explanation'  => 'An oligopoly is a market structure with few firms, each of which can influence prices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 182
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine president was in office during the People Power Revolution of 1986?',
           'choices'      => json_encode([
               'Ferdinand Marcos',
               'Corazon Aquino',
               'Diosdado Macapagal',
               'Gloria Macapagal Arroyo',
           ]),
           'answer'       => 'Ferdinand Marcos',
           'explanation'  => 'President Marcos was ousted during the 1986 People Power Revolution.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 183
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which philosophical school emphasizes knowledge through sensory experience?',
           'choices'      => json_encode([
               'Empiricism',
               'Rationalism',
               'Idealism',
               'Existentialism',
           ]),
           'answer'       => 'Empiricism',
           'explanation'  => 'Empiricism holds that all knowledge is derived from sensory experience.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 184
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which research design involves the manipulation of an independent variable in natural settings?',
           'choices'      => json_encode([
               'Laboratory experiment',
               'Field experiment',
               'Survey research',
               'Historical research',
           ]),
           'answer'       => 'Field experiment',
           'explanation'  => 'Field experiments test hypotheses in real-world environments.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 185
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine Monetary policy tool sets the interest rate for lending to banks?',
           'choices'      => json_encode([
               'Reserve requirement',
               'Discount rate',
               'Open market operations',
               'Moral suasion',
           ]),
           'answer'       => 'Discount rate',
           'explanation'  => 'The discount rate is the interest charged by the central bank on loans to commercial banks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 186
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'In sociology, what term describes norms that guide everyday interactions?',
           'choices'      => json_encode([
               'Mores',
               'Folkways',
               'Laws',
               'Taboos',
           ]),
           'answer'       => 'Folkways',
           'explanation'  => 'Folkways are informal norms governing routine social behavior.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 187
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which tool is used for measuring central tendency in a data set?',
           'choices'      => json_encode([
               'Variance',
               'Standard deviation',
               'Mean',
               'Range',
           ]),
           'answer'       => 'Mean',
           'explanation'  => 'The mean is calculated by summing values and dividing by the number of observations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 188
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine law regulates the use of electronic documents and signatures?',
           'choices'      => json_encode([
               'RA 8792',
               'RA 9184',
               'RA 10173',
               'RA 10931',
           ]),
           'answer'       => 'RA 8792',
           'explanation'  => 'RA 8792, the Electronic Commerce Act, provides legal recognition for electronic documents and signatures.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 189
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which climate phenomenon is characterized by periodic warming of the central and eastern Pacific Ocean?',
           'choices'      => json_encode([
               'La Niña',
               'El Niño',
               'Monsoon',
               'Typhoon',
           ]),
           'answer'       => 'El Niño',
           'explanation'  => 'El Niño involves sustained warming of central and eastern tropical Pacific waters.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 190
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine constitutional commission is tasked with investigating human rights violations?',
           'choices'      => json_encode([
               'Commission on Elections',
               'Commission on Human Rights',
               'Civil Service Commission',
               'Commission on Audit',
           ]),
           'answer'       => 'Commission on Human Rights',
           'explanation'  => 'The CHR investigates alleged violations of civil and political rights.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 191
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which demographic trend is indicated by an increasing median age in a population?',
           'choices'      => json_encode([
               'Population growth',
               'Population aging',
               'Fertility decline',
               'Urbanization',
           ]),
           'answer'       => 'Population aging',
           'explanation'  => 'Population aging occurs when the share of older individuals increases.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 192
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine law guarantees a right to information on public matters?',
           'choices'      => json_encode([
               'RA 6713',
               'RA 10351',
               'RA 10173',
               'RA 11032',
           ]),
           'answer'       => 'RA 11032',
           'explanation'  => 'RA 11032, the Ease of Doing Business Act, includes provisions for the right to information.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 193
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which policy refers to government spending designed to stabilize an economy?',
           'choices'      => json_encode([
               'Stabilization policy',
               'Supply-side policy',
               'Regulatory policy',
               'Trade policy',
           ]),
           'answer'       => 'Stabilization policy',
           'explanation'  => 'Stabilization policies use fiscal and monetary tools to maintain economic equilibrium.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 194
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which scientific study examines the interaction of human societies and their environment?',
           'choices'      => json_encode([
               'Anthropocene studies',
               'Human ecology',
               'Geography',
               'Socioeconomics',
           ]),
           'answer'       => 'Human ecology',
           'explanation'  => 'Human ecology explores relationships between humans and their environments.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 195
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which economic concept describes the additional satisfaction from consuming one more unit of a good?',
           'choices'      => json_encode([
               'Marginal utility',
               'Total utility',
               'Opportunity cost',
               'Diminishing returns',
           ]),
           'answer'       => 'Marginal utility',
           'explanation'  => 'Marginal utility is the change in total utility from consuming an additional unit.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 196
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine law is known as the Revised Penal Code?',
           'choices'      => json_encode([
               'Act No. 3815',
               'RA 6713',
               'RA 7722',
               'RA 9184',
           ]),
           'answer'       => 'Act No. 3815',
           'explanation'  => 'Act No. 3815, enacted in 1930, codified criminal law in the Philippines.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 197
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which social theory argues that society is composed of interrelated parts working together?',
           'choices'      => json_encode([
               'Conflict theory',
               'Functionalism',
               'Symbolic interactionism',
               'Structuralism',
           ]),
           'answer'       => 'Functionalism',
           'explanation'  => 'Functionalism views society as a complex system whose parts work together to promote stability.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 198
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine law provides for the registration of business names and trademarks?',
           'choices'      => json_encode([
               'RA 8293',
               'RA 11032',
               'RA 8792',
               'RA 7277',
           ]),
           'answer'       => 'RA 8293',
           'explanation'  => 'RA 8293, the Intellectual Property Code, covers registration of trademarks and business names.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 199
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which international organization sets global health standards and policies?',
           'choices'      => json_encode([
               'UNICEF',
               'World Health Organization',
               'World Bank',
               'International Monetary Fund',
           ]),
           'answer'       => 'World Health Organization',
           'explanation'  => 'The WHO coordinates international public health within the United Nations system.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 200
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 10,
           'question'     => 'Which Philippine constitutional right protects citizens from unreasonable searches and seizures?',
           'choices'      => json_encode([
               'Right to information',
               'Right to privacy',
               'Right to due process',
               'Right against unreasonable searches and seizures',
           ]),
           'answer'       => 'Right against unreasonable searches and seizures',
           'explanation'  => 'Article III, Section 2 of the 1987 Constitution protects against unreasonable searches and seizures.',
           'created_at'   => $now,
           'updated_at'   => $now,
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
