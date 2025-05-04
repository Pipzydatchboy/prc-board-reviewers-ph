<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart3Seeder extends Seeder
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

       // 41
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "What is the definition of enthalpy (H)?",
           'choices'     => json_encode([
               'Heat content at constant pressure',
               'Energy at absolute zero',
               'Work done in expansion',
               'Sum of internal energy and PV work',
           ]),
           'answer'      => 'Heat content at constant pressure',
           'explanation' => 'Enthalpy is the heat content of a system at constant pressure.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 42
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "According to Hess's Law, the overall enthalpy change of a reaction is:",
           'choices'     => json_encode([
               'Independent of the reaction pathway',
               'Dependent on reaction intermediates',
               'Equal to the activation energy',
               'Zero for all reactions',
           ]),
           'answer'      => 'Independent of the reaction pathway',
           'explanation' => 'Hess\'s law states ΔH° is path-independent and additive.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 43
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Which equation defines Gibbs free energy (G)?",
           'choices'     => json_encode([
               'G = H - TS',
               'G = H + TS',
               'G = TS - H',
               'G = H + PV',
           ]),
           'answer'      => 'G = H - TS',
           'explanation' => 'Gibbs free energy is enthalpy minus temperature times entropy.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 44
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "For a spontaneous process at constant T and P, ΔG is:",
           'choices'     => json_encode([
               '< 0',
               '> 0',
               '= 0',
               'Undefined',
           ]),
           'answer'      => '< 0',
           'explanation' => 'Negative ΔG indicates spontaneity under constant temperature and pressure.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 45
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "What is the standard enthalpy of formation of an element in its most stable form?",
           'choices'     => json_encode([
               '0 kJ/mol',
               '-100 kJ/mol',
               '100 kJ/mol',
               'Depends on element',
           ]),
           'answer'      => '0 kJ/mol',
           'explanation' => 'By definition ΔH°f of a stable element is zero.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 46
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Calculate ΔG° for a reaction at 298 K if ΔH° = -100 kJ and ΔS° = -200 J/K.",
           'choices'     => json_encode([
               '-40 kJ',
               '+40 kJ',
               '-100 kJ',
               '+100 kJ',
           ]),
           'answer'      => '-40 kJ',
           'explanation' => 'ΔG°=ΔH° - TΔS° = -100 kJ - (298 K)(-0.200 kJ/K) = -100 + 59.6 = -40.4 ≈ -40 kJ.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 47
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Entropy change for a process where disorder decreases is:",
           'choices'     => json_encode([
               'Negative',
               'Positive',
               'Zero',
               'Infinite',
           ]),
           'answer'      => 'Negative',
           'explanation' => 'Decrease in disorder leads to negative ΔS.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 48
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Which factor does NOT affect reaction rate according to collision theory?",
           'choices'     => json_encode([
               'Color of reactants',
               'Concentration',
               'Temperature',
               'Surface area',
           ]),
           'answer'      => 'Color of reactants',
           'explanation' => 'Color has no direct role in collision frequency or energy.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 49
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "What is the order of reaction with rate law rate = k[A]^2[B]?",
           'choices'     => json_encode([
               '3',
               '2',
               '1',
               '0',
           ]),
           'answer'      => '3',
           'explanation' => 'The overall order is sum of exponents: 2 + 1 = 3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 50
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "According to Arrhenius equation, increasing temperature does what to rate constant k?",
           'choices'     => json_encode([
               'Increases exponentially',
               'Decreases linearly',
               'No effect',
               'Increases then decreases',
           ]),
           'answer'      => 'Increases exponentially',
           'explanation' => 'k = A e^(-Ea/RT) increases with T in the exponential term.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 51
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "What does activation energy represent?",
           'choices'     => json_encode([
               'Minimum energy for reaction to occur',
               'Heat released',
               'Energy at equilibrium',
               'Total reaction energy',
           ]),
           'answer'      => 'Minimum energy for reaction to occur',
           'explanation' => 'Activation energy is the energy barrier for reactant conversion.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 52
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Which expression defines the equilibrium constant Kp for gases?",
           'choices'     => json_encode([
               'Partial pressures product over reactant',
               'Concentration of products only',
               'Sum of pressures',
               'Difference in volumes',
           ]),
           'answer'      => 'Partial pressures product over reactant',
           'explanation' => 'Kp is defined from partial pressures with stoichiometric exponents.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 53
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Le Chatelier's principle predicts shifts when pressure is increased by: ",
           'choices'     => json_encode([
               'Favoring side with fewer gas moles',
               'Favoring side with more gas moles',
               'Favoring side with solids',
               'No shift',
           ]),
           'answer'      => 'Favoring side with fewer gas moles',
           'explanation' => 'System shifts to reduce pressure by decreasing total moles of gas.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 54
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Which factor does NOT appear in the rate law expression?",
           'choices'     => json_encode([
               'Activation energy',
               'Reactant concentration',
               'Temperature',
               'Catalyst presence',
           ]),
           'answer'      => 'Activation energy',
           'explanation' => 'Activation energy is not directly in the rate law; it appears in Arrhenius eq.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 55
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "What is the relation between ΔG° and equilibrium constant K?",
           'choices'     => json_encode([
               'ΔG° = -RT ln K',
               'ΔG° = RT ln K',
               'ΔG° = K/RT',
               'ΔG° = RT K',
           ]),
           'answer'      => 'ΔG° = -RT ln K',
           'explanation' => 'Standard free energy change relates to K via ΔG° = -RT ln K.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 56
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "At equilibrium, rate of forward reaction equals:",
           'choices'     => json_encode([
               'Rate of reverse reaction',
               'Zero',
               'Activation energy',
               'Concentration of products',
           ]),
           'answer'      => 'Rate of reverse reaction',
           'explanation' => 'Dynamic equilibrium has equal forward and reverse rates.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 57
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "How does a catalyst affect activation energy?",
           'choices'     => json_encode([
               'Lowers activation energy',
               'Raises activation energy',
               'No effect',
               'Removes activation energy',
           ]),
           'answer'      => 'Lowers activation energy',
           'explanation' => 'Catalysts provide an alternative pathway with lower Ea.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 58
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "Which statement about endothermic reactions is correct?",
           'choices'     => json_encode([
               'Absorb heat; ΔH>0',
               'Release heat; ΔH<0',
               'No heat change; ΔH=0',
               'Spontaneous always',
           ]),
           'answer'      => 'Absorb heat; ΔH>0',
           'explanation' => 'Endothermic processes absorb heat, making enthalpy change positive.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 59
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "What is the effect of increasing temperature on K for exothermic reactions?",
           'choices'     => json_encode([
               'K decreases',
               'K increases',
               'K remains same',
               'K becomes zero',
           ]),
           'answer'      => 'K decreases',
           'explanation' => 'For exothermic processes, raising T shifts equilibrium to reactants, lowering K.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 60
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 3,
           'question'    => "What is the expression for first-order rate law?",
           'choices'     => json_encode([
               'ln[A] = -kt + ln[A]₀',
               '[A] = kt + [A]₀',
               '1/[A] = kt + 1/[A]₀',
               '[A] = e^{kt}',
           ]),
           'answer'      => 'ln[A] = -kt + ln[A]₀',
           'explanation' => 'Integrated first-order law: ln[A]t = -kt + ln[A]₀.',
           'created_at'  => $now,
           'updated_at'  => $now
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
