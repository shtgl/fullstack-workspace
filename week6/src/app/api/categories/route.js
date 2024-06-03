import { NextResponse } from "next/server";
import prisma from "@/utils/connect";

export const GET = async () => {
	try {

		const categories = await prisma.category.findMany()

		return new NextResponse(JSON.stringify(categories, {status:500})
		);
	}
	catch(err) {
		console.log(err)
		return new NextResponse(JSON.stringify({message:"Someting went wrong"}, {status:500})
		);
	}
};