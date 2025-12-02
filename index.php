<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JourniqHub - Professional Garden Design & Landscaping Services</title>
    <meta name="description" content="Transform your outdoor space with JourniqHub's expert garden design services. From concept to completion, we create beautiful, sustainable gardens that reflect your vision. Click here to continue exploring our comprehensive landscaping solutions and discover how we can bring your dream garden to life.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .nav-container-8x9z {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-3k7m {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-9p4q {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-5r8t {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-item-2w6y a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-item-2w6y a:hover {
            color: #90c695;
        }

        .hero-section-7n3x {
            background: linear-gradient(rgba(45, 80, 22, 0.7), rgba(74, 124, 89, 0.7)), url('data:image/svg+xml,<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%234a7c59" width="1200" height="600"/><circle fill="%2390c695" cx="200" cy="150" r="80"/><circle fill="%236b8e23" cx="800" cy="300" r="120"/><rect fill="%232d5016" x="400" y="200" width="300" height="200" rx="20"/></svg>');
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-4m8k {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-6j9l {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-1q5n {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-8z2x {
            background: #90c695;
            color: #2d5016;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-8z2x:hover {
            background: #7ab87f;
            transform: translateY(-2px);
        }

        .content-section-9h4v {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .service-grid-3k8m {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin: 3rem 0;
        }

        .service-card-7p2q {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border-left: 5px solid #4a7c59;
        }

        .service-card-7p2q:hover {
            transform: translateY(-5px);
        }

        .service-title-5n9x {
            color: #2d5016;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .history-timeline-4r7k {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
            position: relative;
        }

        .timeline-item-8m3n {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            padding: 1.5rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .timeline-year-6q9p {
            background: #4a7c59;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 80px;
            text-align: center;
        }

        .review-container-2x8k {
            background: #2d5016;
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .review-grid-9j4m {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .review-card-5k7n {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .reviewer-name-3p8q {
            font-weight: bold;
            color: #90c695;
            margin-top: 1rem;
        }

        .specialty-showcase-7m2k {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin: 4rem 0;
            align-items: center;
        }

        .showcase-content-4n9x {
            padding: 2rem;
        }

        .showcase-image-8p5q {
            width: 100%;
            height: 300px;
            background: linear-gradient(45deg, #4a7c59, #90c695);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .process-steps-6k3m {
            background: white;
            padding: 4rem 2rem;
            border-radius: 20px;
            margin: 3rem 0;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        }

        .step-grid-9r7k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .step-item-2q8n {
            text-align: center;
            padding: 2rem;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .step-item-2q8n:hover {
            border-color: #4a7c59;
            background: #f8f9fa;
        }

        .step-number-5m4k {
            background: #4a7c59;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .expertise-banner-8x6n {
            background: linear-gradient(135deg, #6b8e23, #4a7c59);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .footer-section-3k9m {
            background: #2d5016;
            color: white;
            padding: 4rem 2rem 2rem;
        }

        .footer-content-7p4k {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }

        .footer-column-5n8x {
            padding: 1rem;
        }

        .footer-title-9q2m {
            color: #90c695;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .contact-link-4r7k {
            color: white;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
            transition: color 0.3s ease;
        }

        .contact-link-4r7k:hover {
            color: #90c695;
        }

        .modal-overlay-6k8n {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 2000;
        }

        .modal-content-3m9p {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 3rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-8x4k {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #666;
        }

        .section-header-2n7k {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title-9p5m {
            font-size: 2.5rem;
            color: #2d5016;
            margin-bottom: 1rem;
        }

        .section-subtitle-4k8n {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .continue-link-7m3k {
            background: #4a7c59;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .continue-link-7m3k:hover {
            background: #2d5016;
            transform: translateY(-2px);
        }

        .highlight-box-5q9n {
            background: linear-gradient(135deg, #90c695, #6b8e23);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .nav-menu-5r8t {
                display: none;
            }
            
            .hero-title-6j9l {
                font-size: 2.5rem;
            }
            
            .specialty-showcase-7m2k {
                grid-template-columns: 1fr;
            }
            
            .nav-wrapper-3k7m {
                padding: 0 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%32%31%32%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%32%31%32%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%32%31%32%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-8x9z">
        <div class="nav-wrapper-3k7m">
            <a href="#home" class="logo-section-9p4q">JourniqHub</a>
            <ul class="nav-menu-5r8t">
                <li class="nav-item-2w6y"><a href="#services">Services</a></li>
                <li class="nav-item-2w6y"><a href="#history">Our Story</a></li>
                <li class="nav-item-2w6y"><a href="#process">Process</a></li>
                <li class="nav-item-2w6y"><a href="#expertise">Expertise</a></li>
                <li class="nav-item-2w6y"><a href="#reviews">Reviews</a></li>
                <li class="nav-item-2w6y"><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-7n3x">
        <div class="hero-content-4m8k">
            <h1 class="hero-title-6j9l">Transform Your Outdoor Space</h1>
            <p class="hero-subtitle-1q5n">Creating stunning, sustainable gardens that bring your vision to life through expert design and meticulous craftsmanship</p>
            <a href="#services" class="cta-button-8z2x">Explore Our Services</a>
        </div>
    </section>

    <section id="services" class="content-section-9h4v">
        <div class="section-header-2n7k">
            <h2 class="section-title-9p5m">Comprehensive Garden Solutions</h2>
            <p class="section-subtitle-4k8n">From initial consultation to final installation, we provide complete landscaping services tailored to your unique needs and environment</p>
        </div>

        <div class="service-grid-3k8m">
            <div class="service-card-7p2q">
                <h3 class="service-title-5n9x">Garden Planning & Design</h3>
                <p>Our experienced team creates detailed garden plans that maximize your space's potential while considering soil conditions, climate, and your personal preferences. We develop comprehensive blueprints that serve as the foundation for your dream outdoor space.</p>
                <a href="#process" class="continue-link-7m3k">Click here to continue</a>
            </div>

            <div class="service-card-7p2q">
                <h3 class="service-title-5n9x">Landscape Installation</h3>
                <p>Professional installation services ensure your garden design comes to life exactly as planned. Our skilled craftsmen handle everything from soil preparation to plant placement, creating beautiful, functional outdoor environments that thrive for years to come.</p>
            </div>

            <div class="service-card-7p2q">
                <h3 class="service-title-5n9x">Sustainable Gardening</h3>
                <p>We specialize in eco-friendly gardening practices that benefit both your property and the environment. Our sustainable approaches include native plant selection, water-efficient irrigation systems, and organic soil enhancement techniques.</p>
            </div>

            <div class="service-card-7p2q">
                <h3 class="service-title-5n9x">Seasonal Maintenance</h3>
                <p>Keep your garden looking its best year-round with our comprehensive maintenance programs. We provide seasonal care including pruning, fertilization, pest management, and seasonal plantings to ensure your landscape remains vibrant and healthy.</p>
                <a href="#expertise" class="continue-link-7m3k">Click here to continue</a>
            </div>

            <div class="service-card-7p2q">
                <h3 class="service-title-5n9x">Hardscape Integration</h3>
                <p>Enhance your garden with beautiful hardscape elements including pathways, retaining walls, water features, and outdoor living spaces. We seamlessly blend natural and constructed elements to create cohesive, functional outdoor environments.</p>
            </div>

            <div class="service-card-7p2q">
                <h3 class="service-title-5n9x">Consultation Services</h3>
                <p>Get expert advice on any gardening challenge with our professional consultation services. Whether you need help with plant selection, problem-solving, or long-term planning, our specialists provide valuable insights and practical solutions.</p>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-4r7k">
        <div class="section-header-2n7k">
            <h2 class="section-title-9p5m">Our Growing Story</h2>
            <p class="section-subtitle-4k8n">Three decades of cultivating beautiful spaces and lasting relationships with our clients</p>
        </div>

        <div class="timeline-item-8m3n">
            <div class="timeline-year-6q9p">1994</div>
            <div>
                <h4>Humble Beginnings</h4>
                <p>Founded by master gardener Robert Chen in a small workshop, JourniqHub started with a simple mission: to create outdoor spaces that bring joy and tranquility to everyday life. Our first projects were small residential gardens in the local community.</p>
            </div>
        </div>

        <div class="timeline-item-8m3n">
            <div class="timeline-year-6q9p">2001</div>
            <div>
                <h4>Expanding Horizons</h4>
                <p>After seven years of steady growth, we expanded our services to include commercial landscaping and began working with local businesses and municipal projects. This period marked our transition from a small operation to a recognized landscaping company.</p>
            </div>
        </div>

        <div class="timeline-item-8m3n">
            <div class="timeline-year-6q9p">2008</div>
            <div>
                <h4>Sustainable Focus</h4>
                <p>Recognizing the growing importance of environmental responsibility, we pioneered sustainable gardening practices in our region. We became certified in xeriscaping and native plant cultivation, leading the way in eco-friendly landscape design.</p>
            </div>
        </div>

        <div class="timeline-item-8m3n">
            <div class="timeline-year-6q9p">2015</div>
            <div>
                <h4>Technology Integration</h4>
                <p>We embraced modern technology, incorporating 3D design software and smart irrigation systems into our services. This advancement allowed us to provide clients with detailed visualizations and more efficient garden management solutions.</p>
            </div>
        </div>

        <div class="timeline-item-8m3n">
            <div class="timeline-year-6q9p">2024</div>
            <div>
                <h4>Continued Innovation</h4>
                <p>Today, JourniqHub stands as a leader in comprehensive garden design, combining traditional horticultural knowledge with cutting-edge techniques. We've completed over 2,000 projects and continue to push the boundaries of what's possible in landscape design.</p>
            </div>
        </div>
    </section>

    <div class="specialty-showcase-7m2k">
        <div class="showcase-content-4n9x">
            <h3 class="service-title-5n9x">Native Plant Expertise</h3>
            <p>Our deep understanding of local flora allows us to create gardens that thrive naturally in your specific climate and soil conditions. We carefully select native species that require minimal water and maintenance while providing maximum visual impact and ecological benefits.</p>
            <p>Native plants support local wildlife, reduce water consumption, and create authentic landscapes that reflect the natural beauty of your region. Our botanists work closely with each client to identify the perfect combination of plants for their unique space.</p>
        </div>
        <div class="showcase-image-8p5q">
            <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Native garden plants" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
        </div>
    </div>

    <section id="process" class="process-steps-6k3m">
        <div class="section-header-2n7k">
            <h2 class="section-title-9p5m">Our Design Process</h2>
            <p class="section-subtitle-4k8n">A systematic approach that ensures every project meets your expectations and exceeds your dreams</p>
        </div>

        <div class="step-grid-9r7k">
            <div class="step-item-2q8n">
                <div class="step-number-5m4k">1</div>
                <h4>Initial Consultation</h4>
                <p>We begin with an in-depth discussion about your vision, needs, and budget. Our designers visit your property to assess the space, soil conditions, and existing features that will influence the design.</p>
            </div>

            <div class="step-item-2q8n">
                <div class="step-number-5m4k">2</div>
                <h4>Site Analysis</h4>
                <p>Comprehensive evaluation of your property including soil testing, drainage assessment, sun exposure mapping, and identification of any challenges or opportunities that will impact the design.</p>
            </div>

            <div class="step-item-2q8n">
                <div class="step-number-5m4k">3</div>
                <h4>Design Development</h4>
                <p>Creation of detailed design plans incorporating your preferences with our expertise. We provide multiple concepts and work with you to refine the design until it perfectly matches your vision.</p>
            </div>

            <div class="step-item-2q8n">
                <div class="step-number-5m4k">4</div>
                <h4>Implementation</h4>
                <p>Professional installation by our experienced team, following the approved design precisely. We coordinate all aspects of the project from material delivery to final planting and cleanup.</p>
            </div>
        </div>

        <div class="highlight-box-5q9n">
            <h3>Quality Guarantee</h3>
            <p>Every JourniqHub project comes with our comprehensive satisfaction guarantee. We stand behind our work and provide ongoing support to ensure your garden continues to flourish long after installation.</p>
            <a href="#reviews" class="continue-link-7m3k" style="background: white; color: #2d5016;">Click here to continue</a>
        </div>
    </section>

    <div class="specialty-showcase-7m2k">
        <div class="showcase-image-8p5q">
            <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Water feature design" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
        </div>
        <div class="showcase-content-4n9x">
            <h3 class="service-title-5n9x">Water Feature Design</h3>
            <p>Transform your garden with the soothing sounds and visual appeal of custom water features. From elegant fountains to natural-looking ponds and streams, we design and install water elements that become the focal point of your outdoor space.</p>
            <p>Our water features are designed with both beauty and functionality in mind, incorporating efficient circulation systems and low-maintenance components that ensure years of trouble-free enjoyment.</p>
        </div>
    </div>

    <section id="expertise" class="expertise-banner-8x6n">
        <h2>Specialized Garden Solutions</h2>
        <p>Our team brings together decades of experience in horticulture, landscape architecture, and sustainable design practices. We stay current with the latest trends and techniques while honoring time-tested gardening principles that create lasting beauty.</p>
        <p>Whether you're looking to create a peaceful retreat, a productive vegetable garden, or an entertaining space for family and friends, our expertise ensures your project will exceed expectations and provide years of enjoyment.</p>
    </section>

    <section id="reviews" class="review-container-2x8k">
        <div class="section-header-2n7k">
            <h2 class="section-title-9p5m" style="color: white;">Client Experiences</h2>
            <p class="section-subtitle-4k8n" style="color: rgba(255,255,255,0.9);">Hear from satisfied clients who have transformed their outdoor spaces with JourniqHub</p>
        </div>

        <div class="review-grid-9j4m">
            <div class="review-card-5k7n">
                <p>"The transformation of our backyard exceeded all expectations. The team's attention to detail and plant knowledge created a space that looks beautiful year-round and requires minimal maintenance."</p>
                <div class="reviewer-name-3p8q">- Sarah Mitchell, Homeowner</div>
            </div>

            <div class="review-card-5k7n">
                <p>"Working with JourniqHub was a pleasure from start to finish. They listened to our ideas, provided expert guidance, and delivered a garden that perfectly suits our lifestyle and budget."</p>
                <div class="reviewer-name-3p8q">- David Rodriguez, Property Manager</div>
            </div>

            <div class="review-card-5k7n">
                <p>"The sustainable approach they took with our commercial landscaping has reduced our maintenance costs significantly while creating an impressive entrance that our clients always comment on."</p>
                <div class="reviewer-name-3p8q">- Jennifer Walsh, Business Owner</div>
            </div>

            <div class="review-card-5k7n">
                <p>"Five years later, our garden still looks amazing. The plant selections were perfect for our climate, and the design has matured beautifully. Highly recommend their services."</p>
                <div class="reviewer-name-3p8q">- Michael Thompson, Residential Client</div>
            </div>

            <div class="review-card-5k7n">
                <p>"Their expertise in native plants helped us create a wildlife-friendly garden that's both beautiful and environmentally responsible. The birds and butterflies love it as much as we do."</p>
                <div class="reviewer-name-3p8q">- Lisa Chen, Environmental Enthusiast</div>
            </div>

            <div class="review-card-5k7n">
                <p>"The consultation service was invaluable. They helped us solve drainage issues and redesign problem areas that had frustrated us for years. True professionals with practical solutions."</p>
                <div class="reviewer-name-3p8q">- Robert Anderson, Long-term Client</div>
            </div>
        </div>
    </section>

    <div class="content-section-9h4v">
        <div class="service-card-7p2q">
            <h3 class="service-title-5n9x">Seasonal Garden Planning</h3>
            <p>Maximize your garden's beauty throughout the year with our seasonal planning expertise. We design gardens that provide continuous interest, from spring blooms to winter structure, ensuring your outdoor space remains attractive in every season.</p>
            <p>Our seasonal approach includes careful selection of plants with varying bloom times, consideration of fall foliage, winter interest elements, and strategic placement to create year-round visual appeal. This comprehensive planning ensures your investment provides lasting value and enjoyment.</p>
            <a href="#contact" class="continue-link-7m3k">Click here to continue</a>
        </div>
    </div>

    <footer id="contact" class="footer-section-3k9m">
        <div class="footer-content-7p4k">
            <div class="footer-column-5n8x">
                <h3 class="footer-title-9q2m">Contact Information</h3>
                <a href="tel:+15559876543" class="contact-link-4r7k">📞 (555) 987-6543</a>
                <a href="mailto:info@journiqhub.com" class="contact-link-4r7k">✉️ info@journiqhub.com</a>
                <p class="contact-link-4r7k">📍 2847 Garden Valley Road, Greenfield, CA 93927</p>
                <p class="contact-link-4r7k">🕒 Monday - Saturday: 7:00 AM - 6:00 PM</p>
            </div>

            <div class="footer-column-5n8x">
                <h3 class="footer-title-9q2m">Service Areas</h3>
                <p class="contact-link-4r7k">Residential Garden Design</p>
                <p class="contact-link-4r7k">Commercial Landscaping</p>
                <p class="contact-link-4r7k">Sustainable Garden Solutions</p>
                <p class="contact-link-4r7k">Maintenance Programs</p>
                <p class="contact-link-4r7k">Consultation Services</p>
            </div>

            <div class="footer-column-5n8x">
                <h3 class="footer-title-9q2m">About JourniqHub</h3>
                <p class="contact-link-4r7k">Established in 1994, we've been creating beautiful, sustainable gardens for over three decades. Our commitment to quality, environmental responsibility, and client satisfaction has made us a trusted name in landscape design.</p>
            </div>

            <div class="footer-column-5n8x">
                <h3 class="footer-title-9q2m">Legal</h3>
                <a href="#" class="contact-link-4r7k" onclick="openModal('privacy')">Privacy Policy</a>
                <a href="#" class="contact-link-4r7k" onclick="openModal('terms')">Terms of Service</a>
                <p class="contact-link-4r7k">Licensed & Insured</p>
                <p class="contact-link-4r7k">© 2024 JourniqHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-6k8n">
        <div class="modal-content-3m9p">
            <button class="modal-close-8x4k" onclick="closeModal('privacy')">×</button>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            <h3>Information We Collect</h3> <p>JourniqHub collects information you provide directly to us, such as when you request a consultation, subscribe to our newsletter, or contact us for services. This may include your name, email address, phone number, property address, and project details.</p>
        <h3>How We Use Your Information</h3>
        <p>We use the information we collect to provide, maintain, and improve our services, communicate with you about your projects, send you technical notices and support messages, and respond to your comments and questions.</p>
        
        <h3>Information Sharing</h3>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our website and conducting our business.</p>
        
        <h3>Data Security</h3>
        <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
        
        <h3>Contact Us</h3>
        <p>If you have questions about this Privacy Policy, please contact us at info@journiqhub.com or (555) 987-6543.</p>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="terms-modal" class="modal-overlay-6k8n">
    <div class="modal-content-3m9p">
        <button class="modal-close-8x4k" onclick="closeModal('terms')">×</button>
        <h2>Terms of Service</h2>
        <p><strong>Last updated: January 2024</strong></p>
        
        <h3>Agreement to Terms</h3>
        <p>By accessing and using JourniqHub's services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
        
        <h3>Service Description</h3>
        <p>JourniqHub provides garden design, landscaping, and related consultation services. All services are subject to availability and our professional assessment of project feasibility.</p>
        
        <h3>Client Responsibilities</h3>
        <p>Clients are responsible for providing accurate information about their property, obtaining necessary permits, ensuring site accessibility, and maintaining installed landscapes according to our care instructions.</p>
        
        <h3>Payment Terms</h3>
        <p>Payment terms will be specified in individual service agreements. Generally, we require a deposit to begin work, with remaining balance due upon project completion and client approval.</p>
        
        <h3>Warranty and Liability</h3>
        <p>We warrant our workmanship for one year from project completion. Plant warranties vary by species and are detailed in service agreements. Our liability is limited to the cost of services provided.</p>
        
        <h3>Modifications</h3>
        <p>JourniqHub reserves the right to modify these terms at any time. Continued use of our services constitutes acceptance of modified terms.</p>
        
        <h3>Contact Information</h3>
        <p>For questions regarding these terms, contact us at info@journiqhub.com or (555) 987-6543.</p>
    </div>
</div>

<script>
    function openModal(type) {
        document.getElementById(type + '-modal').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeModal(type) {
        document.getElementById(type + '-modal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target.classList.contains('modal-overlay-6k8n')) {
            event.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add scroll effect to navigation
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('.nav-container-8x9z');
        if (window.scrollY > 100) {
            nav.style.background = 'linear-gradient(135deg, #2d5016, #4a7c59)';
            nav.style.boxShadow = '0 2px 20px rgba(0,0,0,0.2)';
        } else {
            nav.style.background = 'linear-gradient(135deg, #2d5016, #4a7c59)';
            nav.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
        }
    });

    // Add animation to service cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe service cards
    document.querySelectorAll('.service-card-7p2q').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Observe timeline items
    document.querySelectorAll('.timeline-item-8m3n').forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(item);
    });

    // Add hover effects to CTA buttons
    document.querySelectorAll('.continue-link-7m3k').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.05)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Add click tracking for continue buttons
    document.querySelectorAll('.continue-link-7m3k').forEach(button => {
        button.addEventListener('click', function(e) {
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'translateY(-2px) scale(1)';
            }, 150);
        });
    });

    // Initialize page
    document.addEventListener('DOMContentLoaded', function() {
        // Add loading animation to hero section
        const hero = document.querySelector('.hero-content-4m8k');
        hero.style.opacity = '0';
        hero.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            hero.style.transition = 'opacity 1s ease, transform 1s ease';
            hero.style.opacity = '1';
            hero.style.transform = 'translateY(0)';
        }, 300);

        // Add stagger animation to navigation items
        document.querySelectorAll('.nav-item-2w6y').forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(-20px)';
            
            setTimeout(() => {
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, 100 * index);
        });
    });

    // Add parallax effect to hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero-section-7n3x');
        const rate = scrolled * -0.5;
        
        if (hero) {
            hero.style.transform = `translateY(${rate}px)`;
        }
    });

    // Add counter animation for statistics
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            element.textContent = Math.floor(current);
            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            }
        }, 20);
    }

    // Mobile menu toggle functionality
    function createMobileMenu() {
        const nav = document.querySelector('.nav-wrapper-3k7m');
        const menuButton = document.createElement('button');
        menuButton.innerHTML = '☰';
        menuButton.style.cssText = `
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            @media (max-width: 768px) {
                display: block;
            }
        `;
        
        nav.appendChild(menuButton);
        
        menuButton.addEventListener('click', function() {
            const menu = document.querySelector('.nav-menu-5r8t');
            menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        });
    }

    // Add form validation for contact interactions
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Add search functionality for services
    function addSearchCapability() {
        const searchInput = document.createElement('input');
        searchInput.type = 'text';
        searchInput.placeholder = 'Search our services...';
        searchInput.style.cssText = `
            padding: 10px;
            border: 2px solid #4a7c59;
            border-radius: 25px;
            margin: 20px 0;
            width: 100%;
            max-width: 400px;
        `;
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const serviceCards = document.querySelectorAll('.service-card-7p2q');
            
            serviceCards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(searchTerm) ? 'block' : 'none';
            });
        });
    }

    // Initialize additional features
    document.addEventListener('DOMContentLoaded', function() {
        createMobileMenu();
        
        // Add dynamic year to copyright
        const currentYear = new Date().getFullYear();
        const copyrightText = document.querySelector('.footer-column-5n8x:last-child .contact-link-4r7k:last-child');
        if (copyrightText) {
            copyrightText.textContent = `© ${currentYear} JourniqHub. All rights reserved.`;
        }
    });
</script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body> 
</html>
            



