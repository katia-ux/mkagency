import { useScrollReveal } from '../hooks/useScrollReveal'

const sectors = [
  'Technology & SaaS',
  'Healthcare & Wellness',
  'Education & e-Learning',
  'Creative & Design',
  'Retail & e-Commerce',
  'Professional Services',
  'Media & Publishing',
  'Hospitality & Travel',
  'NGOs & Social Impact',
  'Startups & Scale-ups',
]

const results = [
  { metric: '3×', label: 'Average engagement increase in first 90 days' },
  { metric: '40%', label: 'Reduction in content production time with our templates' },
  { metric: '85%', label: 'Of clients return for additional projects or retainers' },
]

const logos = [
  { name: 'Brand A', abbr: 'BA' },
  { name: 'Studio Onda', abbr: 'SO' },
  { name: 'Arkive Co.', abbr: 'AC' },
  { name: 'Velo Group', abbr: 'VG' },
  { name: 'Marko Media', abbr: 'MM' },
  { name: 'Pulse Agency', abbr: 'PA' },
]

export default function Credibility() {
  const ref = useScrollReveal()

  return (
    <section ref={ref} className="section-pad bg-paper" id="work">
      <div className="container-site">
        {/* Logos */}
        <div className="reveal-item opacity-0 text-center mb-20">
          <span className="label-tag">Trusted by</span>
          <p className="text-muted text-sm mb-10">
            We work with brands across industries and markets worldwide.
          </p>
          <div className="flex flex-wrap items-center justify-center gap-8">
            {logos.map((logo) => (
              <div
                key={logo.name}
                className="flex items-center gap-2 opacity-40 hover:opacity-80 transition-opacity duration-200"
              >
                <div className="w-8 h-8 bg-ink rounded flex items-center justify-center">
                  <span className="text-white text-xs font-medium">{logo.abbr}</span>
                </div>
                <span className="text-ink font-medium text-sm tracking-wide">{logo.name}</span>
              </div>
            ))}
          </div>
        </div>

        <div className="divider-line mb-20" />

        {/* Results */}
        <div className="reveal-item opacity-0 grid md:grid-cols-3 gap-0 mb-20">
          {results.map((item, index) => (
            <div
              key={item.metric}
              className={`p-8 md:p-10 text-center ${
                index < results.length - 1 ? 'border-b md:border-b-0 md:border-r border-border-line' : ''
              }`}
            >
              <div className="font-display text-5xl text-ink mb-3">{item.metric}</div>
              <p className="text-muted text-sm leading-relaxed max-w-xs mx-auto">{item.label}</p>
            </div>
          ))}
        </div>

        <div className="divider-line mb-20" />

        {/* Sectors */}
        <div className="reveal-item opacity-0">
          <div className="text-center mb-10">
            <span className="label-tag">Industries we've worked with</span>
          </div>
          <div className="flex flex-wrap justify-center gap-3">
            {sectors.map((sector) => (
              <span
                key={sector}
                className="px-4 py-2 border border-border-line text-sm text-muted hover:border-accent hover:text-ink transition-colors duration-200"
              >
                {sector}
              </span>
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}
