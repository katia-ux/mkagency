import { useScrollReveal } from '../hooks/useScrollReveal'

export default function FinalCTA() {
  const ref = useScrollReveal()

  return (
    <section ref={ref} className="bg-ink py-32 relative overflow-hidden" id="contact">
      {/* Background elements */}
      <div className="absolute inset-0 pointer-events-none overflow-hidden">
        <div className="absolute top-0 left-0 w-[500px] h-[500px] rounded-full bg-accent/5 -translate-x-1/2 -translate-y-1/2" />
        <div className="absolute bottom-0 right-0 w-[400px] h-[400px] rounded-full bg-accent/5 translate-x-1/2 translate-y-1/2" />
        <div className="absolute inset-0 opacity-[0.03]"
          style={{
            backgroundImage: `linear-gradient(rgba(255,255,255,0.5) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,255,255,0.5) 1px, transparent 1px)`,
            backgroundSize: '60px 60px',
          }}
        />
      </div>

      <div className="container-site relative z-10">
        <div className="max-w-3xl mx-auto text-center">
          <div className="reveal-item opacity-0">
            <span className="inline-flex items-center gap-3 text-xs tracking-widest2 font-medium text-accent uppercase mb-8">
              <span className="w-6 h-px bg-accent" />
              Let's talk
              <span className="w-6 h-px bg-accent" />
            </span>
          </div>

          <h2
            className="reveal-item opacity-0 heading-display text-white font-semibold leading-tight mb-6"
            style={{ fontSize: 'clamp(2.2rem, 5vw, 3.8rem)' }}
          >
            Ready to build something
            <br />
            <span className="text-accent italic">worth noticing?</span>
          </h2>

          <p className="reveal-item opacity-0 text-white/50 text-lg leading-relaxed mb-12 max-w-xl mx-auto">
            Whether you need a full marketing strategy, a single campaign, or just
            a toolkit to get started—Digi K has something for you.
          </p>

          <div className="reveal-item opacity-0 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a
              href="mailto:hello@digik.agency"
              className="btn-accent text-base px-10 py-4"
            >
              Start a conversation
              <svg className="w-4 h-4" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
            <a
              href="#shop"
              className="inline-flex items-center gap-2 text-white/60 text-sm font-medium hover:text-white transition-colors duration-200 px-4 py-4"
            >
              Or explore the shop
              <svg className="w-4 h-4" fill="none" stroke="currentColor" strokeWidth="1.5" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
              </svg>
            </a>
          </div>

          {/* Email display */}
          <div className="reveal-item opacity-0 mt-16 pt-10 border-t border-white/10">
            <a
              href="mailto:hello@digik.agency"
              className="text-white/30 text-sm hover:text-accent transition-colors duration-200 tracking-wider"
            >
              hello@digik.agency
            </a>
          </div>
        </div>
      </div>
    </section>
  )
}
