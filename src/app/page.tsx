"use client"

import React, { useState, useEffect } from "react"
import {
  ChevronRight,
  Star,
  Users,
  Award,
  Clock,
  Phone,
  Mail,
  MapPin,
  Menu,
  X,
  Scissors,
  Palette,
  TrendingUp,
} from "lucide-react"
import Link from "next/link"
import Image from "next/image"

export default function FashionCourseLanding() {
  const [isMenuOpen, setIsMenuOpen] = useState(false)
  const [activeTestimonial, setActiveTestimonial] = useState(0)

  const courses = [
    {
      title: "Fashion Design Fundamental",
      duration: "3 Bulan",
      students: "150+",
      price: "Rp 2,500,000",
      features: [
        "Sketching & Illustration",
        "Color Theory",
        "Fabric Knowledge",
        "Pattern Making Dasar",
      ],
      icon: <Palette className="w-8 h-8 text-pink-500" />,
    },
    {
      title: "Pattern Making & Tailoring",
      duration: "4 Bulan",
      students: "120+",
      price: "Rp 3,200,000",
      features: [
        "Advanced Pattern Making",
        "Professional Tailoring",
        "Fitting Techniques",
        "Industrial Methods",
      ],
      icon: <Scissors className="w-8 h-8 text-purple-500" />,
    },
    {
      title: "Fashion Business & Marketing",
      duration: "2 Bulan",
      students: "80+",
      price: "Rp 1,800,000",
      features: [
        "Brand Development",
        "Social Media Marketing",
        "E-commerce",
        "Fashion Photography",
      ],
      icon: <TrendingUp className="w-8 h-8 text-blue-500" />,
    },
  ]

  const testimonials = [
    {
      name: "Sarah Maharani",
      role: "Fashion Designer",
      image:
        "https://images.unsplash.com/photo-1494790108755-2616b612b786?w=150&h=150&fit=crop&crop=face",
      text: "Kursus di sini benar-benar mengubah hidup saya! Sekarang saya memiliki brand fashion sendiri dan sudah menjual ke berbagai kota.",
      rating: 5,
    },
    {
      name: "Indira Putri",
      role: "Entrepreneur",
      image:
        "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face",
      text: "Pengajarnya sangat profesional dan sabar. Materinya up-to-date dengan trend fashion terkini. Highly recommended!",
      rating: 5,
    },
    {
      name: "Maya Sari",
      role: "Boutique Owner",
      image:
        "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face",
      text: "Dari tidak tahu apa-apa tentang fashion, sekarang saya sudah punya boutique sendiri. Terima kasih Fashion Academy!",
      rating: 5,
    },
  ]

  const navLinks = [
    {
      title: "Beranda",
      href: "#home",
    },
    {
      title: "Courses",
      href: "#courses",
    },
    {
      title: "Testimoni",
      href: "#testimonials",
    },
    {
      title: "Kontak",
      href: "#contact",
    },
  ]

  useEffect(() => {
    const interval = setInterval(() => {
      setActiveTestimonial((prev) => (prev + 1) % testimonials.length)
    }, 5000)
    return () => clearInterval(interval)
  }, [testimonials.length])

  return (
    <div className="min-h-screen bg-white">
      {/* Navigation */}
      <nav className="fixed top-0 w-full bg-white/95 backdrop-blur-md z-50 border-b border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between items-center h-16">
            <div className="flex items-center">
              <div className="text-2xl font-bold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent">
                FashionAcademy
              </div>
            </div>

            {/* Desktop Menu */}
            <div className="hidden md:block">
              <div className="flex items-center space-x-8">
                {navLinks.map((link) => (
                  <Link
                    key={link.title}
                    href={link.href}
                    className="text-gray-700 hover:text-pink-600 transition-colors"
                  >
                    {link.title}
                  </Link>
                ))}
                <button className="bg-gradient-to-r from-pink-600 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:scale-105 transition-all">
                  Daftar Sekarang
                </button>
              </div>
            </div>

            {/* Mobile Menu Button */}
            <div className="md:hidden">
              <button
                onClick={() => setIsMenuOpen(!isMenuOpen)}
                className="text-gray-700 hover:text-pink-600 transition-colors"
              >
                {isMenuOpen ? (
                  <X className="w-6 h-6" />
                ) : (
                  <Menu className="w-6 h-6" />
                )}
              </button>
            </div>
          </div>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="md:hidden bg-white border-b border-gray-100">
            <div className="px-2 pt-2 pb-3 space-y-1 sm:px-3">
              {navLinks.map((link) => (
                <Link
                  key={link.title}
                  href={link.href}
                  className="block px-3 py-2 text-gray-700 hover:text-pink-600 transition-colors"
                >
                  {link.title}
                </Link>
              ))}
              <button className="w-full mt-4 bg-gradient-to-r from-pink-600 to-purple-600 text-white px-6 py-2 rounded-full">
                Daftar Sekarang
              </button>
            </div>
          </div>
        )}
      </nav>

      {/* Hero Section */}
      <section
        id="home"
        className="pt-16 min-h-screen flex items-center bg-gradient-to-br from-pink-50 via-purple-50 to-blue-50"
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <div className="space-y-8">
              <div className="space-y-4">
                <h1 className="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight">
                  Wujudkan Impian
                  <span className="block bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent">
                    Fashion Designer
                  </span>
                  Profesional
                </h1>
                <p className="text-xl text-gray-600 leading-relaxed">
                  Bergabunglah dengan ribuan siswa yang telah sukses membangun
                  karir di industri fashion. Pelajari semua aspek fashion design
                  dari dasar hingga tingkat profesional.
                </p>
              </div>

              <div className="flex flex-wrap gap-4">
                <button className="bg-gradient-to-r from-pink-600 to-purple-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-xl transform hover:scale-105 transition-all flex items-center">
                  Mulai Belajar Sekarang
                  <ChevronRight className="ml-2 w-5 h-5" />
                </button>
                <button className="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-full text-lg font-semibold hover:border-pink-600 hover:text-pink-600 transition-all">
                  Lihat Portfolio
                </button>
              </div>

              <div className="flex items-center space-x-8 pt-4">
                <div className="text-center">
                  <div className="text-3xl font-bold text-gray-900">500+</div>
                  <div className="text-gray-600">Alumni Sukses</div>
                </div>
                <div className="text-center">
                  <div className="text-3xl font-bold text-gray-900">15+</div>
                  <div className="text-gray-600">Tahun Pengalaman</div>
                </div>
                <div className="text-center">
                  <div className="text-3xl font-bold text-gray-900">98%</div>
                  <div className="text-gray-600">Tingkat Kepuasan</div>
                </div>
              </div>
            </div>

            <div className="relative">
              <div className="relative z-10">
                <Image
                  width={600}
                  height={800}
                  src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=800&fit=crop"
                  alt="Fashion Design Studio"
                  className="rounded-2xl shadow-2xl"
                />
              </div>
              <div className="absolute -top-6 -right-6 w-72 h-72 bg-gradient-to-br from-pink-400 to-purple-400 rounded-2xl opacity-20"></div>
              <div className="absolute -bottom-6 -left-6 w-72 h-72 bg-gradient-to-br from-blue-400 to-pink-400 rounded-2xl opacity-20"></div>
            </div>
          </div>
        </div>
      </section>

      {/* Courses Section */}
      <section id="courses" className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">
              Program Kursus Kami
            </h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Pilih program yang sesuai dengan minat dan tujuan karir Anda.
              Semua program dirancang dengan kurikulum terkini dan dipandu oleh
              instruktur berpengalaman.
            </p>
          </div>

          <div className="grid lg:grid-cols-3 gap-8">
            {courses.map((course, index) => (
              <div
                key={index}
                className="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-pink-200"
              >
                <div className="p-8">
                  <div className="flex items-center justify-between mb-6">
                    {course.icon}
                    <span className="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-medium">
                      {course.duration}
                    </span>
                  </div>

                  <h3 className="text-2xl font-bold text-gray-900 mb-3">
                    {course.title}
                  </h3>

                  <div className="flex items-center space-x-4 mb-6 text-gray-600">
                    <div className="flex items-center">
                      <Users className="w-4 h-4 mr-1" />
                      <span className="text-sm">{course.students} siswa</span>
                    </div>
                    <div className="flex items-center">
                      <Clock className="w-4 h-4 mr-1" />
                      <span className="text-sm">{course.duration}</span>
                    </div>
                  </div>

                  <div className="space-y-2 mb-6">
                    {course.features.map((feature, idx) => (
                      <div
                        key={idx}
                        className="flex items-center text-gray-700"
                      >
                        <ChevronRight className="w-4 h-4 text-pink-500 mr-2" />
                        <span className="text-sm">{feature}</span>
                      </div>
                    ))}
                  </div>

                  <div className="border-t border-gray-100 pt-6">
                    <div className="flex items-center justify-between mb-4">
                      <span className="text-3xl font-bold text-gray-900">
                        {course.price}
                      </span>
                      <span className="text-gray-500 line-through text-lg">
                        Rp{" "}
                        {parseInt(course.price.replace(/[^\d]/g, "")) + 500000}
                      </span>
                    </div>

                    <button className="w-full bg-gradient-to-r from-pink-600 to-purple-600 text-white py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all group-hover:from-pink-700 group-hover:to-purple-700">
                      Daftar Sekarang
                    </button>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Why Choose Us Section */}
      <section className="py-20 bg-gradient-to-br from-gray-50 to-pink-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">
              Mengapa Memilih Kami?
            </h2>
            <p className="text-xl text-gray-600">
              Pengalaman belajar yang komprehensif dengan dukungan penuh untuk
              kesuksesan Anda
            </p>
          </div>

          <div className="grid lg:grid-cols-4 gap-8">
            <div className="text-center group">
              <div className="bg-gradient-to-br from-pink-500 to-purple-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <Award className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-gray-900 mb-2">
                Instruktur Berpengalaman
              </h3>
              <p className="text-gray-600">
                Tim pengajar dengan pengalaman industri 15+ tahun
              </p>
            </div>

            <div className="text-center group">
              <div className="bg-gradient-to-br from-blue-500 to-pink-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <Users className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-gray-900 mb-2">
                Komunitas Alumni
              </h3>
              <p className="text-gray-600">
                Bergabung dengan network profesional fashion designer
              </p>
            </div>

            <div className="text-center group">
              <div className="bg-gradient-to-br from-purple-500 to-blue-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <Scissors className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-gray-900 mb-2">
                Praktik Langsung
              </h3>
              <p className="text-gray-600">
                70% praktik dengan peralatan industri terkini
              </p>
            </div>

            <div className="text-center group">
              <div className="bg-gradient-to-br from-pink-500 to-blue-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <TrendingUp className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-gray-900 mb-2">
                Job Placement
              </h3>
              <p className="text-gray-600">
                Bantuan penempatan kerja dan konsultasi karir
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Testimonials Section */}
      <section id="testimonials" className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">
              Apa Kata Alumni Kami?
            </h2>
            <p className="text-xl text-gray-600">
              Testimoni nyata dari alumni yang telah sukses berkarir di industri
              fashion
            </p>
          </div>

          <div className="max-w-4xl mx-auto">
            <div className="bg-gradient-to-br from-pink-50 to-purple-50 rounded-3xl p-8 lg:p-12">
              <div className="text-center relative">
                <Image
                  width={96}
                  height={96}
                  src={testimonials[activeTestimonial].image}
                  alt={testimonials[activeTestimonial].name}
                  className="w-24 h-24 rounded-full mx-auto mb-6 object-cover shadow-lg"
                />

                <div className="flex justify-center mb-4">
                  {[...Array(testimonials[activeTestimonial].rating)].map(
                    (_, i) => (
                      <Star
                        key={i}
                        className="w-6 h-6 text-yellow-400 fill-current"
                      />
                    )
                  )}
                </div>

                <blockquote className="text-2xl text-gray-800 font-medium mb-6 italic">
                  &quot;{testimonials[activeTestimonial].text}&quot;
                </blockquote>

                <div className="text-lg">
                  <div className="font-bold text-gray-900">
                    {testimonials[activeTestimonial].name}
                  </div>
                  <div className="text-gray-600">
                    {testimonials[activeTestimonial].role}
                  </div>
                </div>
              </div>
            </div>

            <div className="flex justify-center mt-8 space-x-2">
              {testimonials.map((_, index) => (
                <button
                  key={index}
                  onClick={() => setActiveTestimonial(index)}
                  className={`w-3 h-3 rounded-full transition-all ${
                    index === activeTestimonial
                      ? "bg-pink-600 w-8"
                      : "bg-gray-300 hover:bg-gray-400"
                  }`}
                />
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="py-20 bg-gray-900">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-white mb-4">
              Siap Memulai Perjalanan Fashion Anda?
            </h2>
            <p className="text-xl text-gray-300">
              Hubungi kami sekarang untuk konsultasi gratis dan dapatkan info
              lengkap tentang program kursus
            </p>
          </div>

          <div className="grid lg:grid-cols-2 gap-12">
            <div className="space-y-8">
              <div className="space-y-6">
                <div className="flex items-center space-x-4 text-white">
                  <div className="bg-gradient-to-r from-pink-600 to-purple-600 p-3 rounded-full">
                    <Phone className="w-6 h-6" />
                  </div>
                  <div>
                    <div className="font-semibold">Telepon</div>
                    <div className="text-gray-300">+62 821 2345 6789</div>
                  </div>
                </div>

                <div className="flex items-center space-x-4 text-white">
                  <div className="bg-gradient-to-r from-pink-600 to-purple-600 p-3 rounded-full">
                    <Mail className="w-6 h-6" />
                  </div>
                  <div>
                    <div className="font-semibold">Email</div>
                    <div className="text-gray-300">
                      info@fashionacademy.co.id
                    </div>
                  </div>
                </div>

                <div className="flex items-center space-x-4 text-white">
                  <div className="bg-gradient-to-r from-pink-600 to-purple-600 p-3 rounded-full">
                    <MapPin className="w-6 h-6" />
                  </div>
                  <div>
                    <div className="font-semibold">Alamat</div>
                    <div className="text-gray-300">
                      Jl. Fashion Street No. 123
                      <br />
                      Jakarta Selatan, Indonesia
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="space-y-8">
              <form>
                <div className="space-y-6">
                  <label className="block text-gray-700 font-semibold mb-2">
                    Program yang Diminati
                  </label>
                  <select className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 outline-none transition-all">
                    <option>Pilih program kursus</option>
                    <option>Fashion Design Fundamental</option>
                    <option>Pattern Making & Tailoring</option>
                    <option>Fashion Business & Marketing</option>
                    <option>Semua Program</option>
                  </select>
                </div>

                <div>
                  <label className="block text-gray-700 font-semibold mb-2">
                    Pesan
                  </label>
                  <textarea
                    rows={4}
                    className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 outline-none transition-all resize-none"
                    placeholder="Tulis pesan atau pertanyaan Anda..."
                  ></textarea>
                </div>

                <button
                  type="submit"
                  className="w-full bg-gradient-to-r from-pink-600 to-purple-600 text-white py-4 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all"
                >
                  Kirim Pesan & Dapatkan Konsultasi Gratis
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-black text-white py-12">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-4 gap-8">
            <div className="space-y-4">
              <div className="text-2xl font-bold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent">
                FashionAcademy
              </div>
              <p className="text-gray-400">
                Lembaga kursus fashion terdepan yang telah menghasilkan ribuan
                fashion designer profesional di Indonesia.
              </p>
            </div>

            <div>
              <h4 className="font-semibold mb-4">Program</h4>
              <ul className="space-y-2 text-gray-400">
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Fashion Design
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Pattern Making
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Fashion Business
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Workshop
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 className="font-semibold mb-4">Tentang</h4>
              <ul className="space-y-2 text-gray-400">
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Profil Lembaga
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Tim Instruktur
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Alumni
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Karir
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 className="font-semibold mb-4">Dukungan</h4>
              <ul className="space-y-2 text-gray-400">
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    FAQ
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Panduan
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Hubungi Kami
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-pink-500 transition-colors">
                    Blog
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div className="border-t border-gray-800 pt-8 mt-8 text-center text-gray-400">
            <p>
              &copy; 2025 FashionAcademy. All rights reserved. Made with ❤️ for
              future fashion designers.
            </p>
          </div>
        </div>
      </footer>
    </div>
  )
}
