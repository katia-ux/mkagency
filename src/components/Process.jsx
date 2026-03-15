import { useScrollReveal } from '../hooks/useScrollReveal'

const steps = [
  {
    step: '01',
    title: 'Diagnose',
    description:
      'We start by listening. Before anything else, we map your brand, audience, market position, and goals. No assumptions—just clear, structured discovery.',
    detail: 'Brand audit · Market analysis · Goal alignment',
  },
  {
    step: '02',
    title: 'Strategise',
    description:
      "With the full picture in hand, we build a plan that's specific to your situation—channels, messaging, content approach, and KPIs that make sense for your business.",
    detail: 'Roadmapping · Messaging framework · Channel strategy',
  },
  {
    step: '03',
    title: 'Execute',
    description:
      'We bring the strategy to life with precision—consistent output, clear ownership, and quality you can trust. We work as an extension of your team, not a vendor.',
    detail: 'Content production · Campaign execution · Creative delivery',
  },
  {
    step: '04',
    title: 'Optimise',
    description:
      'Performance is reviewed continuously. We measure, learn, and adjust to keep results moving in the right direction—without waiting for a quarterly report.',
    detail: 'Performance tracking · A/B testing · Iterative improvement',
  },
]

export default function Process() {
  const ref = useScrollReveal()

  return (
    <section ref={ref} className="section-pad bg-paper-warm" id="process">
      <div className="container-site">
        {/* Header */}
        <div className="reveal-item opacity-0 text-center max-w-xl mx-auto mb-20">
          <span className="label-tag">How we work</span>
          <h2 className="heading-display text-3xl md:text-4xl font-semibold leading-tight mb-4">
            A clear process.
            <span className="italic text-accent"> No guesswork.</span>
          </h2>
          <p className="text-muted leading-relaxed">
            Every engagement follows a structured methodology that keeps work
            on track and expectations aligned from day one.
          </p>
        </div>

        {/* Steps */}
        <div className="relative">
          {/* Connecting line (desktop) */}
          <div className="hidden lg:block absolute top-10 left-[12.5%] right-[12.5%] h-px bg-border-line z-0" />

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-0">
            {steps.map((step, index) => (
              <div
                key={step.step}
                className="reveal-item opacity-0 relative p-8 md:p-10 border-r border-b border-border-line last:border-r-0 md:last:border-r-0 lg:last:border-r-0"
                style={{ transitionDelay: `${index * 100}ms` }}
              >
                {/* Step number circle */}
                <div className="relative z-10 w-12 h-12 border border-border-line bg-paper-warm flex items-center justify-center mb-8">
                  <span className="text-xs font-mono text-accent font-medium">{step.step}</span>
                </div>

                {/* Content */}
                <div>
                  <h3 className="font-display text-2xl font-semibold text-ink mb-4">
                    {step.title}
                  </h3>
                  <p className="text-muted text-sm leading-relaxed mb-6">
                    {step.description}
                  </p>
                  <p className="text-xs text-accent/70 tracking-wide font-medium leading-relaxed">
                    {step.detail}
                  </p>
                </div>

                {/* Arrow (not last) */}
                {index < steps.length - 1 && (
                  <div className="hidden lg:block absolute top-10 -right-3 z-20 text-border-line">
                    <svg className="w-6 h-6 text-accent/30" fill="none" stroke="currentColor" strokeWidth="1.5" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                  </div>
                )}
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}
