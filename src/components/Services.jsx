import { useScrollReveal } from '../hooks/useScrollReveal'

const services = [
  {
    number: '01',
    title: 'Digital Marketing Strategy',
    description:
      'End-to-end marketing strategy built on data, audience insight, and business goals. We define channels, messaging, and metrics that drive real results.',
    tags: ['Growth strategy', 'Campaign planning', 'Analytics'],
  },
  {
    number: '02',
    title: 'Strategic Communication',
    description:
      'From brand voice to crisis communication, we help organisations communicate with clarity and consistency across every touchpoint.',
    tags: ['Brand messaging', 'PR strategy', 'Internal comms'],
  },
  {
    number: '03',
    title: 'Branding & Design',
    description:
      'Visual identities and brand systems that feel distinctive and work across digital environments. Strategy-first, aesthetics second.',
    tags: ['Visual identity', 'Brand systems', 'Art direction'],
  },
  {
    number: '04',
    title: 'Digital Content',
    description:
      'Content that builds authority and drives engagement—written, visual, or social. Always aligned with strategy, never produced for volume alone.',
    tags: ['Copy & content', 'Social media', 'Email marketing'],
  },
  {
    number: '05',
    title: 'Podcast & Audiovisual',
    description:
      'Strategy, production, and distribution for podcasts, video series, and branded audiovisual content. Full-service from concept to publish.',
    tags: ['Podcast production', 'Video strategy', 'Content series'],
  },
  {
    number: '06',
    title: 'Agency & Team Support',
    description:
      'White-label delivery, overflow capacity, and embedded support for agencies and marketing teams scaling without expanding headcount.',
    tags: ['White-label', 'Project delivery', 'Fractional CMO'],
  },
]

export default function Services() {
  const ref = useScrollReveal()

  return (
    <section ref={ref} className="section-pad bg-paper-warm" id="services">
      <div className="container-site">
        {/* Header */}
        <div className="reveal-item opacity-0 max-w-xl mb-16">
          <span className="label-tag">Our services</span>
          <h2 className="heading-display text-3xl md:text-4xl font-semibold leading-tight mb-4">
            Everything a modern brand
            needs to grow.
          </h2>
          <p className="text-muted leading-relaxed">
            Six interconnected service areas, designed to work together or be
            deployed individually depending on your goals.
          </p>
        </div>

        {/* Services grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-border-line border border-border-line">
          {services.map((service, index) => (
            <div
              key={service.number}
              className="reveal-item opacity-0 bg-paper p-8 md:p-10 group cursor-default
                         hover:bg-ink transition-colors duration-400"
              style={{ transitionDelay: `${index * 80}ms` }}
            >
              <div className="text-accent text-xs font-medium tracking-widest2 uppercase mb-6 font-mono">
                {service.number}
              </div>
              <h3 className="font-display text-xl font-semibold text-ink group-hover:text-white mb-4 transition-colors duration-400 leading-tight">
                {service.title}
              </h3>
              <p className="text-muted text-sm leading-relaxed mb-6 group-hover:text-white/60 transition-colors duration-400">
                {service.description}
              </p>
              <div className="flex flex-wrap gap-2">
                {service.tags.map((tag) => (
                  <span
                    key={tag}
                    className="text-xs px-2.5 py-1 bg-paper-warm text-muted group-hover:bg-white/10 group-hover:text-white/50 transition-colors duration-400"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>
          ))}
        </div>

        {/* Bottom CTA */}
        <div className="reveal-item opacity-0 mt-12 flex flex-col sm:flex-row items-start sm:items-center gap-6">
          <a href="#contact" className="btn-primary">
            Discuss your project
            <svg className="w-4 h-4" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
          <p className="text-muted text-sm">
            Not sure where to start?{' '}
            <a href="#contact" className="text-ink underline underline-offset-4 hover:text-accent transition-colors">
              Let's have a conversation.
            </a>
          </p>
        </div>
      </div>
    </section>
  )
}
