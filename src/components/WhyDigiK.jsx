import { useScrollReveal } from '../hooks/useScrollReveal'

const differentiators = [
  {
    number: '01',
    title: 'Strategy first, always',
    description:
      "Every recommendation starts with diagnosis. We don't propose solutions before we understand the problem—so every move is intentional.",
  },
  {
    number: '02',
    title: 'International perspective',
    description:
      'We work with clients across markets and cultures. Our approach is global by default, adapted locally when it matters.',
  },
  {
    number: '03',
    title: 'Creative and commercial',
    description:
      'We balance creative thinking with commercial clarity. Work that looks and feels good—and moves business metrics.',
  },
  {
    number: '04',
    title: 'Distributed, focused team',
    description:
      'Our team works across time zones, bringing diverse expertise without the overhead of a traditional agency structure.',
  },
  {
    number: '05',
    title: 'No fluff, no filler',
    description:
      "We don't sell hope or vanity metrics. You'll know exactly what we're doing, why we're doing it, and what it's delivering.",
  },
  {
    number: '06',
    title: 'Built to scale with you',
    description:
      'From solo founders to multi-market enterprises, our service model grows with your business. No lock-ins, no bloat.',
  },
]

export default function WhyDigiK() {
  const ref = useScrollReveal()

  return (
    <section ref={ref} className="section-pad bg-paper" id="why-digik">
      <div className="container-site">
        <div className="grid lg:grid-cols-5 gap-16">
          {/* Left sticky heading */}
          <div className="lg:col-span-2 reveal-item opacity-0">
            <div className="lg:sticky lg:top-32">
              <span className="label-tag">Why Digi K</span>
              <h2 className="heading-display text-3xl md:text-4xl font-semibold leading-tight mb-6">
                What makes us
                different.
              </h2>
              <p className="text-muted leading-relaxed mb-10">
                Lots of agencies promise results. We focus on the process,
                the thinking, and the execution that actually produces them.
              </p>
              <a href="#contact" className="btn-outline">
                Work with us
              </a>
            </div>
          </div>

          {/* Right: differentiators list */}
          <div className="lg:col-span-3 space-y-0">
            {differentiators.map((item, index) => (
              <div
                key={item.number}
                className="reveal-item opacity-0 flex gap-6 py-8 border-b border-border-line last:border-b-0 group"
                style={{ transitionDelay: `${index * 80}ms` }}
              >
                <span className="text-xs font-mono text-accent/60 pt-1 flex-shrink-0 w-6">
                  {item.number}
                </span>
                <div>
                  <h3 className="font-medium text-ink text-lg mb-2 group-hover:text-accent transition-colors duration-200">
                    {item.title}
                  </h3>
                  <p className="text-muted text-sm leading-relaxed">
                    {item.description}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}
